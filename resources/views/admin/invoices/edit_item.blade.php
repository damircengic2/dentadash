@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit Invoice Item
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" rel="stylesheet" />
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Invoice item No. {{$invoiceLine->id}}</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li><a href="{{url('/admin/invoices')}}"> Invoices</a></li>
        <li><a href="{{url('/admin/invoices')}}/{{$invoiceLine->invoice->id}}/invoice_lines"> Invoice No. {{$invoiceLine->invoice->id}}</a></li>
        <li class="active">Invoices Item No. {{$invoiceLine->id}}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-md-9 col-lg-9 col-12">
            <div class="card panel-primary ">
                <div class="card-heading">
                    <h4 class="card-title pull-left"> <i class="livicon" data-name="printer" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit Item
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('admin/invoice_lines')}}/{{$invoiceLine->id}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="service">Service</label>
                            <select id="service" name="service" class="form-control" width="100%"></select>


                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantity" value="{{$invoiceLine->quantity}}">
                        </div>

                        <input type="submit" class="btn btn-warning" value="Edit item">
                    </form>

                </div>
            </div>
        </div>
    </div><!-- row-->


</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>

    <script>
        var data = [
        <?php
        foreach($services as $service)
        {
            echo "
                {
                    id: ".$service->id.",
                    text: '".$service->name."',
                },
            ";
        }
        ?>
        ];

        $('#service').select2({
              data: data
        })
        $('#service').val(<?php echo "'".$invoiceLine->service->id."'"; ?>).trigger('change');
    </script>


    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this User? This operation is irreversible.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <!-- /.modal-dialog -->
    <script>
        $(function () {
            $('body').on('hidden.bs.modal', '.modal', function () {
                $(this).removeData('bs.modal');
            });
        });
        var $url_path = '{!! url('/') !!}';
        $('#delete_confirm').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var $recipient = button.data('id');
            var modal = $(this)
            modal.find('.modal-footer a').prop("href",$url_path+"/admin/users/"+$recipient+"/delete");
        })
    </script>

@stop