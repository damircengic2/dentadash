<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateDentalChartRequest;
use App\Http\Requests\UpdateDentalChartRequest;
use App\Repositories\DentalChartRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\DentalChart;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DentalChartController extends InfyOmBaseController
{
    /** @var  DentalChartRepository */
    private $dentalChartRepository;

    public function __construct(DentalChartRepository $dentalChartRepo)
    {
        $this->dentalChartRepository = $dentalChartRepo;
    }

    /**
     * Display a listing of the DentalChart.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->dentalChartRepository->pushCriteria(new RequestCriteria($request));
        $dentalCharts = $this->dentalChartRepository->all();
        return view('admin.dentalCharts.index')
            ->with('dentalCharts', $dentalCharts);
    }

    /**
     * Show the form for creating a new DentalChart.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.dentalCharts.create');
    }

    /**
     * Store a newly created DentalChart in storage.
     *
     * @param CreateDentalChartRequest $request
     *
     * @return Response
     */
    public function store(CreateDentalChartRequest $request)
    {
        $input = $request->all();

        $dentalChart = $this->dentalChartRepository->create($input);

        Flash::success('DentalChart saved successfully.');

        return redirect(route('admin.dentalCharts.index'));
    }

    /**
     * Display the specified DentalChart.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dentalChart = $this->dentalChartRepository->findWithoutFail($id);

        if (empty($dentalChart)) {
            Flash::error('DentalChart not found');

            return redirect(route('dentalCharts.index'));
        }

        return view('admin.dentalCharts.show')->with('dentalChart', $dentalChart);
    }

    /**
     * Show the form for editing the specified DentalChart.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dentalChart = $this->dentalChartRepository->findWithoutFail($id);

        if (empty($dentalChart)) {
            Flash::error('DentalChart not found');

            return redirect(route('dentalCharts.index'));
        }

        return view('admin.dentalCharts.edit')->with('dentalChart', $dentalChart);
    }

    /**
     * Update the specified DentalChart in storage.
     *
     * @param  int              $id
     * @param UpdateDentalChartRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDentalChartRequest $request)
    {
        $dentalChart = $this->dentalChartRepository->findWithoutFail($id);

        

        if (empty($dentalChart)) {
            Flash::error('DentalChart not found');

            return redirect(route('dentalCharts.index'));
        }

        $dentalChart = $this->dentalChartRepository->update($request->all(), $id);

        Flash::success('DentalChart updated successfully.');

        return redirect(route('admin.dentalCharts.index'));
    }

    /**
     * Remove the specified DentalChart from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.dentalCharts.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = DentalChart::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.dentalCharts.index'))->with('success', Lang::get('message.success.delete'));

       }

}
