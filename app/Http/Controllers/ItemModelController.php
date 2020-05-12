<?php

namespace App\Http\Controllers;

use App\ItemModel;
use Illuminate\Http\Request;

class ItemModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //
        $models = ItemModel::all();
        return view('item.itemModels.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
        return view('item.itemModels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $model = new ItemModel();
        $nmed = $model -> name = $request['name'];
        $model -> descriptions = $request['descriptions'];
        $model -> save();
        return  redirect() -> route('itemmodels.index') -> with('success',ucfirst($nmed).' Added Succesfully' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemModel  $itemModel
     * @return \Illuminate\Http\Response
     */
    public function show(ItemModel $itemModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemModel  $itemModel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(ItemModel $itemModel)
    {
        /**
         * Fetch the View for the Edit
         */
        return view('item.itemModels.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemModel  $itemModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemModel $itemModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemModel  $itemModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemModel $itemModel)
    {
        //
    }
}
