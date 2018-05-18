@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Invoice history
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/tables.css') }}" />

    <style>

        #table1_filter{
            margin-bottom: 10px;
        }

    </style>
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">

                <!--section starts-->
                <h1>Invoice history</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Invoices</a>
                    </li>
                    <li class="active">Invoice history</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12 my-3">
                        <div class="card panel-primary filterable">
                            <div class="card-heading clearfix  ">
                                <div class="card-title pull-left">
                                       <div class="caption">
                                    Invoice history
                                </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
                                <table class="table table-striped table-bordered" id="table1" width="100%">
                                    <thead>
                                        <tr>

                                            <th>Invoice ID</th>
                                            <th>Payee</th>
                                            <th>Amount</th>
                                            <th>Creation date</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- /.modal ends here -->
            </section>
            <!-- content -->

            <?php  
            $invoice = ConsoleTVs\Invoices\Classes\Invoice::make()
 ->addItem('Test Item', 10.25, 2, 1412)
 ->addItem('Test Item 2', 5, 2, 923)
 ->addItem('Test Item 3', 15.55, 5, 42)
 ->addItem('Test Item 4', 1.25, 1, 923)
 ->addItem('Test Item 5', 3.12, 1, 3142)
 ->addItem('Test Item 6', 6.41, 3, 452)
 ->addItem('Test Item 7', 2.86, 1, 1526)
 ->number(4021)
 ->tax(21)
 ->notes('Lrem ipsum dolor sit amet, consectetur adipiscing elit.')
 ->customer([
  'name' => 'Èrik Campobadal Forés',
  'id' => '12345678A',
  'phone' => '+34 123 456 789',
  'location' => 'C / Unknown Street 1st',
  'zip' => '08241',
  'city' => 'Manresa',
  'country' => 'Spain',
 ])
 ->download('demo'); 
->show('demo');
</script>
?>
    @stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/table-advanced.js') }}" ></script>
@stop
