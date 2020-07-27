<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Http\Requests\BankFormRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BankController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $banks = Bank::latest() -> paginate(4);
        return  view('banks.index', compact('banks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
     return \view('banks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BankFormRequest $request
     * @param Bank $bank
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BankFormRequest $request, Bank $bank)
    {
        $bank -> code = $request['code'];
        $bname = $bank -> name = $request['name'];
        $bank -> account_ref = $request['ref'];
        $bank -> account_num = $request['account_num'];
        $bank -> descriptions = $request['descriptions'];
        $saved = $bank -> save();
        if ($saved){
            return redirect() -> route('banks.index') -> with('success', strtoupper($bname).' Added Successfully');
        }
        else{
            return redirect() -> route('banks.index') -> with('error', strtoupper($bname).' Could Not be Added');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return Application|Factory|View
     */
    public function show(Bank $bank)
    {
        //
        return \view('banks.show', compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        //
    }
}
