<?php

namespace App\Http\Controllers;

use App\CashCollection;
use App\Http\Requests\CashCollectionFormRequest;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CashCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        //
        $collectors = CashCollection::latest() -> paginate(4);
        return \view('cashpower.cashCollections.index', compact('collectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        //
        return \view('cashpower.cashCollections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CashCollectionFormRequest $request
     * @param CashCollection $cashCollection
     * @return RedirectResponse
     */
    public function store(CashCollectionFormRequest $request, CashCollection $cashCollection)
    {
//             $this->authorize('create', $cashCollection);

        /**
         * +--------------------+-----------------------+------+-----+---------+----------------+
        | Field              | Type                  | Null | Key | Default | Extra          |
        +--------------------+-----------------------+------+-----+---------+----------------+
        | id                 | bigint unsigned       | NO   | PRI | NULL    | auto_increment |
        | cashier_id         | bigint unsigned       | NO   | MUL | NULL    |                |
        | machine_id         | int unsigned          | NO   |     | NULL    |                |
        | shift_num          | int unsigned          | NO   |     | NULL    |                |
        | collector_id       | bigint unsigned       | NO   | MUL | NULL    |                |
        | amount_to_reversed | decimal(8,2) unsigned | NO   |     | NULL    |                |
        | amount_collected   | decimal(8,2) unsigned | NO   |     | NULL    |                |
        | amount_to_bank     | decimal(8,2) unsigned | NO   |     | NULL    |                |
        | descriptions       | longtext              | YES  |     | NULL    |                |
        | deleted_at         | timestamp             | YES  |     | NULL    |                |
        | created_at         | timestamp             | YES  |     | NULL    |                |
        | updated_at         | timestamp             | YES  |     | NULL    |                |
        +--------------------+-----------------------+------+-----+---------+----------------+

         */
        $cashier = $cashCollection -> cashier_id = $request['cashier'];
        $cashCollection -> machine_id= $request['machine'];
        $cashCollection -> shift_num = $request['endOfShift_num'];
        $cashCollection -> collector_id = auth() -> user() -> staff_id;
        $cashCollection -> amount_to_reversed = ( $request['EndOfShiftAmount'] - $request['ActualCashInHand']);
        $cashCollection -> amount_collected = $request['EndOfShiftAmount'];
        $cashCollection -> amount_to_bank = $request['ActualCashInHand'];
        $saved = $cashCollection -> save();
        if ($saved){
            return redirect() -> route('cashCollections.index') -> with('success','Cash Collected From '.$cashier);
        }
        else{
            return redirect() -> route('cashCollections.index') -> with('error','Collecting Cash from  '.$cashier);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CashCollection  $cashCollection
     * @return Application|Factory|View
     */
    public function show(CashCollection $cashCollection)
    {
//        $this->authorize('view', $cashCollection);
         return \view('cashpower.cashCollections.show', compact('cashCollection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\CashCollection $cashCollection
     * @return void
     */
    public function edit(CashCollection $cashCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CashCollection  $cashCollection
     * @return Response
     */
    public function update(Request $request, CashCollection $cashCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CashCollection  $cashCollection
     * @return Response
     */
    public function destroy(CashCollection $cashCollection)
    {
        //
    }
}
