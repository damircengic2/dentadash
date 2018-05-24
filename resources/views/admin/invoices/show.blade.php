@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Invoice No. {{$invoice->id}}
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Invoice details</h1>
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
                    Invoice No.  {{$invoice->id}}
                </h4>
            </div>
            <div class="card-body">
                <a class="pull-right" href="{{url('/admin/invoice')}}/{{$invoice->id}}/pdf"><button class="btn btn-primary">Download PDF</button></a>
                
                <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                    <div class="col-3">
                        <p class="font-weight-bold">{{$businessDetails->name}}</p>
                        <p class="text-justify">
                            {{$businessDetails->location}}
                            {{$businessDetails->City}}
                            {{$businessDetails->country}}
                            {{$businessDetails->zip}}
                        </p>
                        <hr>
                    </div>
                    <div class="col-3">
                        <p class="font-weight-bold">{{$invoice->patient->lname}} {{$invoice->patient->Fname}}</p>
                        <p class="text-justify">
                            {{$invoice->patient->Address}}
                            {{$invoice->patient->City}}
                            {{$invoice->patient->Country}}
                            {{$invoice->patient->PostalCode}}
                        </p>
                    </div>
                    <div class="col-9 mx-auto">
                        <h2 class="float-left">Invoice Total : </h2>
                        <h2 class="float-right">{{ $invoice->amount_with_tax() }}{{ $invoice->currency() }}</h2>
                    </div>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Quantity</th>
                                <th scope="col">Service Description</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($invoice->invoiceLines as $invoice_line)
                            <tr>
                                <th scope="row">{{$invoice_line->quantity}}</th>
                                <td>{{$invoice_line->service->name}}</td>
                                <td>{{$invoice_line->service->unitPrice}}</td>
                                <td>{{$invoice_line->amount()}}</td>
                            </tr>
                        @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Subtotal</td>
                                <td>{{$invoice->total_amount()}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Tax ({{$invoice->tax_rate()}}%)</td>
                                <td>{{$invoice->tax()}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Total</td>
                                <td>{{ $invoice->amount_with_tax() }}{{ $invoice->currency() }}</td>
                            </tr>

                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>
    </div><!-- row-->

</section>
@stop
