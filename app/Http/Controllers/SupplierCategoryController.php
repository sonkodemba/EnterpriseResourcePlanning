<?php

namespace App\Http\Controllers;

use App\SupplierCategory;
use Illuminate\Http\Request;

class SupplierCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        /**
         * Get the List of Supplier Categorie.
         */
        $supplierCategory = SupplierCategory::all();
        return view('item.supplier.suppliercategories.index', compact('supplierCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
        return view('item.supplier.suppliercategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, SupplierCategory $category)
    {
        /**
         * +--------------+-----------------+------+-----+---------+----------------+
        | Field        | Type            | Null | Key | Default | Extra          |
        +--------------+-----------------+------+-----+---------+----------------+
        | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | name         | varchar(255)    | NO   | UNI | NULL    |                |
        | descriptions | longtext        | YES  |     | NULL    |                |
        | deleted_at   | timestamp       | YES  |     | NULL    |                |
        | created_at   | timestamp       | YES  |     | NULL    |                |
        | updated_at   | timestamp       | YES  |     | NULL    |                |
        +--------------+-----------------+------+-----+---------+----------------+

         */
       $sname =  $category -> name = $request['name'];
        $category -> descriptions = $request['descriptions'];
//        dd($request -> all());
        $category -> save();
        return redirect()-> route('suppliercategories.index')-> with('success', $sname.' Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SupplierCategory  $supplierCategory
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(SupplierCategory $supplierCategory)
    {
        return view('item.supplier.suppliercategories.show', compact('supplierCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SupplierCategory  $supplierCategory
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(SupplierCategory $supplierCategory)
    {
        //
        return view('item.supplier.suppliercategories.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupplierCategory  $supplierCategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, SupplierCategory $supplierCategory)
    {
        //
        $supplier =$category = SupplierCategory::find($supplierCategory -> id);
        $category -> name = $request['name'];
        $category -> descriptions = $request['descriptions'];
        $category -> save();
        return redirect() -> route('suppliercategories.index')-> with('success', $supplier.' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupplierCategory  $supplierCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierCategory $supplierCategory)
    {
        //
    }
}
