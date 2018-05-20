@extends('admin/layouts/default')

@section('title')
Patient
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Patient View</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Patients</li>
        <li class="active">Patient Profile</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
      <div class="col-sm-6">
       <div class="card panel-primary">
                <div class="card-heading clearfix">
                    <h4 class="card-title"> 
                        Information
                    </h4>
                </div>
                    <div class="card-body col-sm-6 offset-sm-3">
                        @include('admin.patients.show_fields')
                    </div>
                </div>
            </div>
        
<div class="col-sm-6">
    <div class="card panel-info form-group"> 
        <div class="card-heading clearfix">
                    <h4 class="card-title"> 
                        Appointments
                    </h4>
                </div>
<!-- // include appointments section --> 
<p>Lorem ipsum </p>
<p>Lorem ipsum </p>
<p>Lorem ipsum </p>
<p>Lorem ipsum </p>
<p>Lorem ipsum </p>

    </div>

      <div class="card panel-success form-group"> 
        <div class="card-heading clearfix">
                    <h4 class="card-title"> 
                        Dental chart
                    </h4>
                </div>
<!-- // include appointments section --> 
<p>Lorem ipsum </p>
<p>Lorem ipsum </p>
<p>Lorem ipsum </p>
<p>Lorem ipsum </p>
<p>Lorem ipsum </p>

    </div>

      <div class="card panel-warning"> 
        <div class="card-heading clearfix">
                    <h4 class="card-title"> 
                        Invoices
                    </h4>
                </div>
<!-- // include appointments section --> 
<p>Lorem ipsum </p>
<p>Lorem ipsum </p>
<p>Lorem ipsum </p>
<p>Lorem ipsum </p>
<p>Lorem ipsum </p>

    </div>

</div> <!-- col-sm-6 -->

    <div class="form-group">
           <a href="{!! route('admin.patients.index') !!}" class="btn btn-warning mt-2">Back</a>
    </div>
     </div>
  </div>
</section>

@stop
