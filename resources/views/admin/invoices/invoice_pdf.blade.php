<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
    td {
        border-bottom: 1px solid #ddd;
    }
    </style>
</head>
<body>
    <div style="width: 100%">
        <em>Invoice No. {{$invoice->id}}</em>
        <table style="width: 25%">
            <tbody>
                <tr>
                    <td>
                        <div style="border-bottom: 1px solid #ddd;"><p><b>{{$businessDetails->name}}</b></p>
                        <p>{{$businessDetails->location}}
                            {{$businessDetails->City}}
                            {{$businessDetails->country}}
                            {{$businessDetails->zip}}</p>
                        </div>
                        <div><p><b>{{$invoice->patient->lname}} {{$invoice->patient->Fname}}</b></p>
                        <p>{{$invoice->patient->Address}}
                            {{$invoice->patient->City}}
                            {{$invoice->patient->Country}}
                            {{$invoice->patient->PostalCode}}</p></div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div style="border-bottom: 1px solid #ddd;">
        <h2 style="text-align: center;">Invoice Total : {{ $invoice->amount_with_tax() }}{{ $invoice->currency() }}</h2>
        </div>
        <table style="width: 100%"> 
            <tr>
                <td><b>Quantity</b></td>
                <td><b>Service Description</b></td>
                <td><b>Unit Price</b></td>
                <td><b>Amount</b></td>
            </tr>
            @foreach ($invoice->invoiceLines as $invoice_line)
            <tr>
                <td>{{$invoice_line->quantity}}</th>
                <td>{{$invoice_line->service->name}}</td>
                <td>{{$invoice_line->service->unitPrice}}</td>
                <td>{{$invoice_line->amount()}}</td>
            </tr>
            @endforeach 
            <tr>
                <td></td>
                <td></td>
                <td><b>Subtotal</b></td>
                <td>{{$invoice->total_amount()}}{{ $invoice->currency() }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>Tax ({{$invoice->tax_rate()}}%)</b></td>
                <td>{{$invoice->tax()}}{{ $invoice->currency() }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>Total</b></td>
                <td>{{ $invoice->amount_with_tax() }}{{ $invoice->currency() }}</td>
            </tr>
        </table>

    </div>
</body>
</html>