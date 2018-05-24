<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Service;
use App\Invoice;
use App\InvoiceLine;
use Yajra\DataTables\DataTables;
use App\Models\BusinessDetail;
use Sentinel;
use PDF;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::whereUser_id(Sentinel::getUser()->id)->get();
        return view('admin.invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::all();
        return view('admin.invoices.create', compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'patient' => 'required'
        ]);
        
        
        $invoice = new Invoice();
        $invoice->user_id = Sentinel::getUser()->id;
        $invoice->patient_id = $request->get('patient');
        $invoice->save();

        return redirect("/admin/invoices/$invoice->id/invoice_lines");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::find($id);
        $businessDetails = BusinessDetail::first();
        return view('admin.invoices.show', compact('invoice', 'businessDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect('/admin/invoices');
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
        return redirect('/admin/invoices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        foreach ($invoice->invoiceLines as $inv_line)
        {
            $inv_line->delete();
        }
        $invoice->delete();
        return redirect('/admin/invoices')->with('success','Invoice has been deleted');
    }

    public function data()
    {
        $invoice = Invoice::get(['id', 'created_at']);

        return DataTables::of($invoice)
            ->editColumn('created_at',function(Invoice $invoice) {
                return $invoice->created_at->diffForHumans();
            })
            ->addColumn('actions',function($invoice) {
                $actions = '<a href='. url('admin/invoices').'/'.$invoice->id .'><i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view invoice"></i></a>
                            <a href='. url('admin/invoices').'/'.$invoice->id.'/invoice_lines' .'><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit invoice"></i></a>';
                
                    $actions .= '<a href="'. url('admin/invoice') . '/' . $invoice->id . '/confirm-delete" data-id="'.$invoice->id.'" data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete invoice"></i></a>';
                
                return $actions;
            })
            ->addColumn('patient',function($invoice) {
                $invoice_patient = Invoice::whereId($invoice->id)->first();
                return $invoice_patient->patient->lname . ' ' . $invoice_patient->patient->Fname;
            })
            ->addColumn('amount',function($invoice) {
                return Invoice::whereId($invoice->id)->first()->total_amount();
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function pdf($id)
    {
        $invoice = Invoice::find($id);
        $businessDetails = BusinessDetail::first();
        $pdf = PDF::loadView('admin.invoices.invoice_pdf', compact('invoice', 'businessDetails'));
        return $pdf->download('invoice'.$id.'.pdf');
    }
}
