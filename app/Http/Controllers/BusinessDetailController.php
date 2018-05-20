<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateBusinessDetailRequest;
use App\Http\Requests\UpdateBusinessDetailRequest;
use App\Repositories\BusinessDetailRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\BusinessDetail;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BusinessDetailController extends InfyOmBaseController
{
    /** @var  BusinessDetailRepository */
    private $businessDetailRepository;

    public function __construct(BusinessDetailRepository $businessDetailRepo)
    {
        $this->businessDetailRepository = $businessDetailRepo;
    }

    /**
     * Display a listing of the BusinessDetail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->businessDetailRepository->pushCriteria(new RequestCriteria($request));
        $businessDetails = $this->businessDetailRepository->all();
        return view('admin.businessDetails.index')
            ->with('businessDetails', $businessDetails);
    }

    /**
     * Show the form for creating a new BusinessDetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.businessDetails.create');
    }

    /**
     * Store a newly created BusinessDetail in storage.
     *
     * @param CreateBusinessDetailRequest $request
     *
     * @return Response
     */
    public function store(CreateBusinessDetailRequest $request)
    {
        $input = $request->all();

        $businessDetail = $this->businessDetailRepository->create($input);

        Flash::success('BusinessDetail saved successfully.');

        return redirect(route('admin.businessDetails.index'));
    }

    /**
     * Display the specified BusinessDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $businessDetail = $this->businessDetailRepository->findWithoutFail($id);

        if (empty($businessDetail)) {
            Flash::error('BusinessDetail not found');

            return redirect(route('businessDetails.index'));
        }

        return view('admin.businessDetails.show')->with('businessDetail', $businessDetail);
    }

    /**
     * Show the form for editing the specified BusinessDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $businessDetail = $this->businessDetailRepository->findWithoutFail($id);

        if (empty($businessDetail)) {
            Flash::error('BusinessDetail not found');

            return redirect(route('businessDetails.index'));
        }

        return view('admin.businessDetails.edit')->with('businessDetail', $businessDetail);
    }

    /**
     * Update the specified BusinessDetail in storage.
     *
     * @param  int              $id
     * @param UpdateBusinessDetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBusinessDetailRequest $request)
    {
        $businessDetail = $this->businessDetailRepository->findWithoutFail($id);

        

        if (empty($businessDetail)) {
            Flash::error('BusinessDetail not found');

            return redirect(route('businessDetails.index'));
        }

        $businessDetail = $this->businessDetailRepository->update($request->all(), $id);

        Flash::success('BusinessDetail updated successfully.');

        return redirect(route('admin.businessDetails.index'));
    }

    /**
     * Remove the specified BusinessDetail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.businessDetails.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = BusinessDetail::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.businessDetails.index'))->with('success', Lang::get('message.success.delete'));

       }

}
