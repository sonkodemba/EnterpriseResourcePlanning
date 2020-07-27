<?php

namespace App\Http\Controllers;

use App\EvendEndOfDay;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EvendEndOfDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     * @throws AuthorizationException
     */
    public function index()
    {
//        $this->authorize('view',EvendEndOfDay::class);
        //
        return view('cashpower.endOfDays.index');
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
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
//        $this->authorize('create',EvendEndOfDay::class);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EvendEndOfDay  $evendEndOfDay
     * @return Application|Factory|View
     */
    public function show(EvendEndOfDay $evendEndOfDay)
    {

        return \view('cashpower.endOfDays.show', compact('evendEndOfDay'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EvendEndOfDay  $evendEndOfDay
     * @return \Illuminate\Http\Response
     */
    public function edit(EvendEndOfDay $evendEndOfDay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\EvendEndOfDay  $evendEndOfDay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EvendEndOfDay $evendEndOfDay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EvendEndOfDay  $evendEndOfDay
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvendEndOfDay $evendEndOfDay)
    {
        //
    }
}
