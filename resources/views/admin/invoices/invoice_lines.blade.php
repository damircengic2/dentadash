@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Invoice No. {{$invoice->id}}
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
    <h1>Invoice No. {{$invoice->id}}</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li><a href="{{ url('/admin/invoices') }}"> Invoices</a></li>
        <li class="active">Invoice No. {{$invoice->id}}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-12">
        <div class="card panel-primary ">
            <div class="card-heading">
                <h4 class="card-title pull-left"> <i class="livicon" data-name="printer" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Invoice Items (Total Amount : {{ $invoice->total_amount() }})
                </h4>
                <button type="button" class="btn pull-right" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus"></span> Add Items</button>
            </div>
            <div class="card-body">
                <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                <table class="table table-bordered width100" id="table">
                    <thead>
                        <tr class="filters">
                            <th>Item No.</th>
                            <th>Service</th>
                            <th>Quantity</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </div><!-- row-->

    <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form id="myForm">
                    <div class="modal-header">
                        <h4 class="modal-title">Add an invoice item</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                    <div class="modal-body">
                        
                            <div class="form-group">
                                <label for="service">Service</label>
                                <select id="service" name="service" class="form-control" width="100%"></select>


                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" id="quantity" placeholder="Quantity">
                            </div>
                            
                    </div>
                    <div class="modal-footer">
                        <input id="invoice" type="hidden" name="invoice" value="{{$invoice->id}}">
                        <input id="ajaxSubmit" type="submit" class="btn btn-primary" value="Add">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>

    <script>
        var data = [
        <?php
        foreach($services as $service)
        {
            echo "
                {
                    id: ".$service->id.",
                    text: '".$service->name."'
                },
            ";
        }
        ?>
        ];

        $('#service').select2({
              data: data
        })
    </script>

    <script>
        $(function() {
            var table = $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! url('admin/data/invoice_lines') !!}' + '/' + <?php echo $invoice->id; ?>,
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'service', name: 'patient' },
                    { data: 'quantity', name: 'amount' },
                    { data: 'created_at', name:'created_at'},
                    { data: 'actions', name: 'actions', orderable: false, searchable: false }
                ]
            });
            table.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );
        });

    </script>

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete Invoice Item</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this Item? This operation is irreversible.
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
            modal.find('.modal-footer a').prop("href",$url_path+"/admin/invoice_lines/"+$recipient+"/delete");
        })
    </script>

    <script>
        jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
            });
            jQuery.ajax({
              url: "{{url('/admin/invoices')}}" + "/" + <?php echo $invoice->id; ?> + "/invoice_lines",
              
                method: 'post',
                data: {
                    invoice_id: jQuery('#invoice').val(),
                    service_id: jQuery('#service').val(),
                    quantity: jQuery('#quantity').val()
                },
              success: function(result){
                 jQuery('.alert').show();
                 jQuery('.alert').html(result.success);
                 //url = "http://www.mydomain.com/new-page.html";
                 $(location).attr("href", "{{url('/admin/invoices')}}" + "/" + <?php echo $invoice->id; ?> + "/invoice_lines");
              }});
            });
        });
    </script>
@stop