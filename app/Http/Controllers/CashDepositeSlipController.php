<?php

namespace App\Http\Controllers;

use App\CashDepositeSlip;
use App\Http\Requests\CashDepositeSlipFormRequest;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CashDepositeSlipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
//        $this->authorize('view',CashDepositeSlip::class);
        $depositeSlip = CashDepositeSlip::where('depositor_id','=',auth() -> user() -> staff_id)-> latest() -> paginate(4);
        return  view('cashpower.cashDeposites.index', compact('depositeSlip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('cashpower.cashDeposites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param CashDepositeSlip $cashDepositeSlip
     * @return RedirectResponse
     */
    public function store(Request $request, CashDepositeSlip $cashDepositeSlip)
    {
//        $this->authorize('creat', $cashDepositeSlip);
         $cashDepositeSlip -> bank_id = $request['bank'];
        $cashDepositeSlip ->slip_num = $request['receipt_num'];
        $account = $cashDepositeSlip -> account_num = $request['account_num'];
        $cashDepositeSlip -> account_holder_name = "Premier Solutions";
        $cashDepositeSlip -> curency_type = "GMD";
        $amountDeposited = $cashDepositeSlip -> amount = $request['amount'];
        $cashDepositeSlip -> depositor_id = auth() -> user() -> staff_id;
        $saved = $cashDepositeSlip -> save();

        if ($saved){
            /**
             * redirect() to Index
             */
            return redirect() -> route('cashDeposites.index') -> with('success',$amountDeposited.' Deposited to '.$account);
        }
        else{
            return redirect() -> route('cashDeposites.index') -> with('error','Error Depositing');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param CashDepositeSlip $cashDepositeSlip
     * @return Application|Factory|View
     */
    public function show(CashDepositeSlip $cashDepositeSlip)
    {
//        $this->authorize('view', $cashDepositeSlip);
        return \view('cashpower.cashDeposites.show', compact('cashDepositeSlip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CashDepositeSlip $cashDepositeSlip
     * @return void
     */
    public function edit(CashDepositeSlip $cashDepositeSlip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param CashDepositeSlip $cashDepositeSlip
     * @return void
     */
    public function update(Request $request, CashDepositeSlip $cashDepositeSlip)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CashDepositeSlip $cashDepositeSlip
     * @return void
     * @throws AuthorizationException
     */
    public function destroy(CashDepositeSlip $cashDepositeSlip)
    {
        //
        $this->authorize('delete',$cashDepositeSlip);
    }
}
