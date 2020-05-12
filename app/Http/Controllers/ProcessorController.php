<?php

namespace App\Http\Controllers;

use App\Processor;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //
        $processors = Processor::paginate(4);
        return view('item.processors.index', compact('processors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
        return view('item.processors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Processor $processor)
    {
        //
        $pname = $processor -> name = $request['name'];
        $processor -> size = $request['size'];
        $processor -> descriptions = $request['descriptions'];
        $processor -> save();
        return redirect() -> route('processors.index')
                -> with('success', ucfirst($pname).' Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Processor  $processor
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Processor $processor)
    {
        //
        return view('processors.show', compact('processor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Processor  $processor
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Processor $processor)
    {
        //
        return view('item.processors.edit', compact('processor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Processor $processor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Processor $processor)
    {
        //
    }
}
