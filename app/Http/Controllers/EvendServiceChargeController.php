<?php

namespace App\Http\Controllers;

use App\EvendServiceCharge;
use App\Http\Requests\EvendServiceChargesFormRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EvendServiceChargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $serviceCharges = EvendServiceCharge::latest() -> paginate(4);
        return view('cashpower.serviceCharges.index', compact('serviceCharges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('cashpower.serviceCharges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EvendServiceChargesFormRequest $request
     * @param EvendServiceCharge $charge
     * @return RedirectResponse
     */
    public function store(EvendServiceChargesFormRequest $request, EvendServiceCharge $charge)
    {
        $charge -> from = $request['from'];
        $charge -> to = $request['to'];
        $charge -> transactionFee = $request['transactionFee'];
        $charge -> eSMS_receipt_Fee = $request['e_sms_Receipt_Fee'];
        $charge -> cashpower = $request['cashpower_To_Be_Vended'];
        $charge -> descriptions = $request['descriptions'];
        $saved = $charge -> save();
        if ($saved){
            return redirect() -> route('serviceCharges.index') -> with('success', strtoupper('Service Charges').' Created SuccessFully');
        }
        else{
            return redirect() -> route('serviceCharges.index') -> with('error', strtoupper('error!').'Creating '.strtoupper('Service Charges'));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EvendServiceCharge  $evendServiceCharge
     * @return Application|Factory|View
     */
    public function show(EvendServiceCharge $evendServiceCharge)
    {
        return  view('cashpower.serviceCharges.show', compact('evendServiceCharge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EvendServiceCharge  $evendServiceCharge
     * @return \Illuminate\Http\Response
     */
    public function edit(EvendServiceCharge $evendServiceCharge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EvendServiceCharge  $evendServiceCharge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EvendServiceCharge $evendServiceCharge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EvendServiceCharge  $evendServiceCharge
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvendServiceCharge $evendServiceCharge)
    {
        //
    }
}
