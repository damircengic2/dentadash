<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\getDeletedPatients;
use App\Http\Requests\CreatePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Repositories\PatientRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Patient;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PatientController extends InfyOmBaseController
{
    /** @var  PatientRepository */
    private $patientRepository;

    public function __construct(PatientRepository $patientRepo)
    {
        $this->patientRepository = $patientRepo;
    }

    /**
     * Display a listing of the Patient.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->patientRepository->pushCriteria(new RequestCriteria($request));
        $patients = $this->patientRepository->all();
        return view('admin.patients.index')
            ->with('patients', $patients);
    }

    /**
     * Show the form for creating a new Patient.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.patients.create');
    }

    /**
     * Store a newly created Patient in storage.
     *
     * @param CreatePatientRequest $request
     *
     * @return Response
     */
    public function store(CreatePatientRequest $request)
    {
        $input = $request->all();

        $patient = $this->patientRepository->create($input);

        Flash::success('Patient saved successfully.');

        return redirect(route('admin.patients.index'));
    }

    /**
     * Display the specified Patient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patient = $this->patientRepository->findWithoutFail($id);

        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('admin.patients.index'));
        }

        return view('admin.patients.show')->with('patient', $patient);
    }

    /**
     * Show the form for editing the specified Patient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patient = $this->patientRepository->findWithoutFail($id);

        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('admin.patients.index'));
        }

        return view('admin.patients.edit')->with('patient', $patient);
    }

    /**
     * Update the specified Patient in storage.
     *
     * @param  int              $id
     * @param UpdatePatientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatientRequest $request)
    {
        $patient = $this->patientRepository->findWithoutFail($id);

        

        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('admin.patients.index'));
        }

        $patient = $this->patientRepository->update($request->all(), $id);

        Flash::success('Patient updated successfully.');

        return redirect(route('admin.patients.index'));
    }

    /**
     * Remove the specified Patient from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.patients.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Patient::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.patients.index'))->with('success', Lang::get('message.success.delete'));

       }

/**
* @return View 
*/
     
    public function getDeletedPatients()
    {
        // Grab deleted patients
        $patients = Patient::onlyTrashed()->get();

        // Show the page
        return view('admin.patients/deleted_patients', compact('patients'));
    }


}
