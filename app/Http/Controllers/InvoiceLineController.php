<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Invoice;
use Yajra\DataTables\DataTables;
use App\InvoiceLine;
use App\Models\Service;

class InvoiceLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index (Request $request, $id)
    {
        $invoice = Invoice::find($id);
        $services = Service::all();
        return view('admin.invoices.invoice_lines', compact('invoice', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'invoice_id' => 'required',
            'service_id' => 'required',
            'quantity' => 'required'
        ]);
        
        $invoiceLine = new InvoiceLine($data);
        $invoiceLine->save();

        return response()->json(['success'=>'Data is successfully added']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoiceLine = InvoiceLine::find($id);
        $services = Service::all();
        return view('admin.invoices.edit_item', compact('invoiceLine', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $invoiceLine = InvoiceLine::find($id);

        $this->validate(request(), [
            'service' => 'required',
            'quantity' => 'required'
        ]);

        $invoiceLine->service_id = $request->get('service');
        $invoiceLine->quantity = $request->get('quantity');
        $invoiceLine->save();

        return redirect('/admin/invoices/'.$invoiceLine->invoice_id.'/invoice_lines')->with('success','Invoice item has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoiceLine = InvoiceLine::find($id);
        $invoice_id = $invoiceLine->invoice_id;
        $invoiceLine->delete();

        return redirect('/admin/invoices/'.$invoiceLine->invoice_id.'/invoice_lines')->with('success','Invoice item has been deleted');
    }

    public function data($invoice_id)
    {
        $invoiceLines = InvoiceLine::whereInvoice_id($invoice_id)->get(['id', 'quantity', 'created_at']);

        return DataTables::of($invoiceLines)
            ->editColumn('created_at',function(InvoiceLine $invoiceLine) {
                return $invoiceLine->created_at->diffForHumans();
            })
            ->addColumn('actions',function($invoiceLine) {
                $actions = '<a href="'. url('admin/invoice_lines').'/'. $invoiceLine->id .'/edit"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit item"></i></a>';
                
                    $actions .= '<a href="'. url('admin/invoice_lines') . '/' . $invoiceLine->id . '/confirm-delete" data-id="'.$invoiceLine->id.'" data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete item"></i></a>';
                
                return $actions;
                //<a href="{{url('/invoices')}}/{{$invoice->id}}/invoice_lines">Edit</a>admin/invoice_lines/{id}/edit
            })
            ->addColumn('service',function($invoiceLine) {
                $invoiceLine_service = InvoiceLine::whereId($invoiceLine->id)->first();
                return $invoiceLine_service->service->name;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
