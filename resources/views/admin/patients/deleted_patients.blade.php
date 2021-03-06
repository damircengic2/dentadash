@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Deleted patients
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
    <!-- end page css -->
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Deleted patients</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li><a href="#"> Users</a></li>
                    <li class="active">Deleted patients</li>
                </ol>
            </section>
            <!-- Main content -->
         <section class="content paddingleft_right15">
    <div class="row">
        <div class="col-12">
        <div class="card panel-warning">
            <div class="card-heading">
                <h4 class="card-title">
                    
                    Archived patients
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                <table class="table table-bordered" id="table">
                    <thead>
                    <tr class="filters">
                        <th>Name</th>
                        <th>Last name</th>
                        <th>User E-mail</th>
                        <th>Dental record</th>
                        <th>Deleted</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($patients as $patient)
                        <tr>
                            <td>{!! $patient->Fname !!}</td>
                            <td>{!! $patient->lname !!}</td>
                            <td>{!! $patient->Email !!}</td>
                            <td>DOPUNI</td>
                            <td>{!! $patient->deleted_at->diffForHumans() !!}</td>
                        
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

        
    @stop

{{-- page level scripts --}}
@section("footer_scripts")
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@stop
