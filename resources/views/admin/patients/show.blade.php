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
 
   <div class="form-group container" style="padding-top: 2%;"> 
    <img src="{{ asset('assets/img/d_overhead_top.svg') }}"/>
    {!!$patient->svg!!} 
    <img src="{{ asset('assets/img/d_overhead_bottom.svg') }}"/>
</div>
<div class="form-group col-md-6 offset-md-3" style="text-align: center; padding: 1%; border-radius: 10px; background: #E7E1E8; ">

    <!-- Legend of procedures -->
    <span><i class="fa fa-circle" style="color: grey;"></i> Cavity</span>
    <span><i class="fa fa-circle" style="color: green;"></i> Composite</span>
    <span><i class="fa fa-circle" style="color: yellow;"></i> Crown</span>
    <span><i class="fa fa-circle" style="color: blue;"></i> Implant</span>
    <span><i class="fa fa-circle" style="color: black;"></i> Extraction</span>
    </div>

      <div class="card panel-warning"> 
        <div class="card-heading clearfix">
                    <h4 class="card-title"> 
                        Invoices
                    </h4>
                </div>
<!-- // include appointments section --> 


    </div>

</div> <!-- col-sm-6 -->

    <div class="form-group">
           <a href="{!! route('admin.patients.index') !!}" class="btn btn-warning mt-2">Back</a>
    </div>
     </div>
  </div>
</section>

@stop
