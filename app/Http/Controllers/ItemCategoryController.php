<?php

namespace App\Http\Controllers;

use App\ItemCategory;
use Illuminate\Http\Request;

class ItemCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //
        /** @var TYPE_NAME $itemcategory */
        $itemcategory =ItemCategory::paginate(4);
        return view('item.itemcategories.index', compact('itemcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('item.itemcategories.create');
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
        $item = new ItemCategory();
        $item -> code = $request['code'];
       $item_name =  $item -> name = $request['name'];
        $item -> descriptions = $request['descriptions'];
        $item -> save();
        return redirect()->route('itemcategories.index')->with('success',ucfirst($item_name).' Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemCategory  $itemCategory
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(ItemCategory $itemCategory)
    {
        //
        return view('item.itemcategories.show', compact('itemCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemCategory  $itemCategory
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(ItemCategory $itemCategory)
    {
        //
        return view('item.itemcategories.edit', compact('itemCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemCategory $itemCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemCategory $itemCategory)
    {
        //
    }
}
