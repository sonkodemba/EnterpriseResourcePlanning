<?php

namespace App\Http\Controllers;

use App\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //
        $batches = Batch::paginate(4);
        return view('item.batches.index', compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
        return view('item.batches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Batch $batch)
    {
        //
        $code = $batch -> code = $request['code'];
        $bname = $batch -> name = $request['name'];
        $batch -> descriptions = $request['descriptions'];
        $batch -> save();
        return redirect() -> route('batches.index')
                        -> with('success', ucfirst($bname).' '.ucfirst($code).'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Batch  $batch
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Batch $batch)
    {
        //
        return view('item.batches.show', compact('batch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit(Batch $batch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
        $batch = Batch::find(id);
        $batch -> update($request -> all());
        return redirect() -> route('batches.index') -> with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Batch  $batch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //
        $batch = Batch::whereId($id) -> delete();
        return redirect() -> route('batches.index') -> with('success', ucfirst($batch -> name). 'Deleted Successfully');


    }
}
