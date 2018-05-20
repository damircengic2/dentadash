@extends('admin/layouts/default')

@section('title')
Patients
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Patients</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Patients</li>
        <li class="active">Patients List</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
     <div class="col-12">
     @include('flash::message')
        <div class="card panel-primary ">
            <div class="card-heading clearfix">
                <h4 class="card-title float-left">
                    Patients List
                </h4>
                <div class="float-right">
                    <a href="{{ route('admin.patients.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="card-body table-responsive">
                 @include('admin.patients.table')
                 
            </div>
        </div>
        </div>
 </div>
</section>
@stop
