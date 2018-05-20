@extends('admin/layouts/default')

@section('title')
DentalCharts
@parent
@stop

@section('header_styles')
        <script src="{{ asset('assets/js/snap.svg.js') }}"/></script>
        <script src="{{ asset('assets/js/chart.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

        
@stop

{{-- Page content --}}
@section('content')

<style type="text/css">
#chart {
  width: 100%;
  margin: 30px 0; }
  #chart rect, #chart polygon {
    stroke-width: 5px;
    stroke: black;
    fill: white; }
    #chart rect .selected, #chart polygon .selected {
      fill: lightskyblue; }
    #chart rect .amalgam, #chart polygon .amalgam {
      fill: grey; }
    #chart rect .extract, #chart polygon .extract {
      fill: black !important; }

select, button {
  /*width: 20em;
  height: 3em;*/
  font-size: 2em; }
</style>

<section class="content-header">
    <h1>DentalCharts</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>DentalCharts</li>
        <li class="active">DentalCharts List</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
     <div class="col-12">
     @include('flash::message')
        <div class="card panel-primary ">
            <div class="card-heading clearfix">
                <h4 class="card-title float-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    DentalCharts List
                </h4>
                <div class="float-right">
                    <a href="{{ route('admin.dentalCharts.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />

                 <h1>Dental Charting Demo</h1>

        <input type="text" id="patient_name" placeholder="insert patient name here">
        <br />
        <button id="button_load">Load graph</button>
        <br />

        <!-- FIXME: viewbox needs to be there when the element is created -->
        <svg id="chart" preserveAspectRatio="xMidYMid meet" viewbox="0 0 5820 740"></svg>
        Selected patient: <label id="selected_patient">none</label>
        <br />
        <button id="button_save">Save graph</button>

        <section class='treatment-form'>
            <select id="selected-treatment">
                <option value="amalgam" colordata="red">Amalgam</option>
                <option value="composite" colordata="green">Composite</option>
                <option value="extract" colordata="blue">Extract</option>
                <option value="crown" colordata="grey">Crown</option>
            </select>
            <button id='btn_add_treatment'>Add treatment</button>
            <div class="card-body table-responsive">
                 @include('admin.dentalCharts.table')
                 
            </div>
        </div>
        </div>
 </div>
</section>
@stop
