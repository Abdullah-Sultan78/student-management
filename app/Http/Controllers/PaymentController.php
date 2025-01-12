<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use PDF;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.payment.index',[
            'payments' => Payment::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.payment.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'enrollment_id' =>'required',
            'paid_date' =>'required',
            'amount' =>'required',
        ]);

//        return $request;
        Payment::newPayment($request);
        return back()->with('message','Batch info created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        return view('website.payment.show',[
            'payment' => $payment
        ]);
    }

//    public function showCustomerDownload( string $id)
    public function showCustomerDownload( )
    {
//        $pdf = PDF::loadHTML('<h1>Test</h1>'); // make pdf
        $pdf = PDF::loadView('website.payment.print'); // make pdf
        return $pdf->stream(); // show pdf
//        $pdf = PDF::loadView('pdf.document', $data);
//        return $pdf->stream('document.pdf');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        return view('website.payment.edit',[
            'payment' => $payment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        Payment::updatePayment($request,$payment);
        return redirect('/payment')->with('message','Payment info updated successfully!! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect('/payment')->with('message','Payment details delete successfully');
    }

    public function print()
    {
        return view('website.payment.print');
    }

}
