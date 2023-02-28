<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::orderBy('create_at','desc')->paginate(50);
        return view('admin.payments.list',compact(['payments']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $Payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $Payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $Payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $Payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $Payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $Payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $Payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $Payment)
    {
        //
    }
}
