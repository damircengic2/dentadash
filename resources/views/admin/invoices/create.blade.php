@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Create an Invoice
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" rel="stylesheet" />
    <!--<link rel="stylesheet" href="https://select2.org/assets/a7be624d756ba99faa354e455aed250d.css">-->
    <style>
        body{
            overflow: -webkit-paged-x;
        }
        .select2-container{
            width:100% !important;
        }
        /*github repository css*/
        .select2-result-repository__avatar {
            float: left;
            width: 60px;
            margin-right: 10px;
        }
        .select2-result-repository__avatar img {
            width: 100%;
            height: auto;
            border-radius: 2px;
        }
        .select2-result-repository__meta {
            margin-left: 70px;
        }
    </style>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>Invoices</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon " data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Invoices</a></li>
            <li class="breadcrumb-item active">Create new</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="col-md-9 col-lg-9 col-12">
                <div class="card panel-primary ">
                    <div class="card-heading">
                        <h4 class="card-title"> <i class="livicon" data-name="printer" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            New Invoice
                        </h4>
                    </div>
                    <br />
                    <div class="card-body">
                            <form method="POST" action="{{ url('/admin/invoices') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="tag_list">Patient:</label>
                                    <select id="tag_list" name="patient" class="form-control" width="100%"></select>
                                </div>
                                <input class="btn btn-primary" type="submit" value="Add">
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}"></script>
    <script>
        var data = [
        <?php
        foreach($patients as $patient)
        {
            echo "
                {
                    id: ".$patient->id.",
                    text: '".$patient->lname." ".$patient->Fname."'
                },
            ";
        }
        ?>
        ];

        $('#tag_list').select2({
              data: data
        })
    </script>

@stop