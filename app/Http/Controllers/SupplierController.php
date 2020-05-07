<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        /**
         * Get the List of Supplier Details Here
         */
        $suppliers = Supplier::all();
        return view('supplier.suppliers.index',compact('suppliers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        /**
         * ret me the view for Create
         */
        return view('supplier.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        /**
         * Store Data into @suppliers
        +------------------+-----------------+------+-----+---------+----------------+
        | Field            | Type            | Null | Key | Default | Extra          |
        +------------------+-----------------+------+-----+---------+----------------+
        | id               | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | name             | varchar(255)    | NO   | UNI | NULL    |                |
        | code             | varchar(255)    | NO   | UNI | NULL    |                |
        | category_id      | bigint unsigned | NO   | MUL | NULL    |                |
        | gppa_license_no  | varchar(255)    | NO   | UNI | NULL    |                |
        | trade_license_no | varchar(255)    | NO   | UNI | NULL    |                |
        | gppa_license     | mediumtext      | YES  |     | NULL    |                |
        | trade_license    | mediumtext      | YES  |     | NULL    |                |
        | address          | longtext        | YES  |     | NULL    |                |
        | telephone        | int unsigned    | NO   |     | NULL    |                |
        | email            | varchar(255)    | NO   | UNI | NULL    |                |
        | descriptions     | longtext        | YES  |     | NULL    |                |
        | deleted_at       | timestamp       | YES  |     | NULL    |                |
        | created_at       | timestamp       | YES  |     | NULL    |                |
        | updated_at       | timestamp       | YES  |     | NULL    |                |
        +------------------+-----------------+------+-----+---------+----------------+
         */
//        dd($request -> all());
        $supplier = new Supplier();
        $supplier_name = $supplier -> name = $request['name'];
        $supplier -> code = $request['code'];
        $supplier -> category_id = $request['category_id'];
        $gppa = $supplier -> gppa_license_no = $request['gppa_license_no'];
        $trade = $supplier -> trade_license_no = $request['trade_license_no'];


        if ($request->file('gppa_license')) {
            $file = $request->file('gppa_license');
            $extension = $file->getClientOriginalExtension();
            $filename = $gppa . '.' . $extension;
            $file->move('upload/gppa', $filename);
            $supplier->gppa_license = $filename;
        }

         $supplier -> trade_license = $request['trade_license'];
        if ($request->file('trade_license')) {
            $file = $request->file('trade_license');
            $extension = $file->getClientOriginalExtension();
            $filename = $trade . '.' . $extension;
            $file->move('upload/TradeLicense', $filename);
            $supplier->trade_license = $filename;

        }
        $supplier -> address = $request['address'];
        $supplier -> telephone = $request['telephone'];
        $supplier -> email = $request['email'];

         $supplier -> save();
        return redirect()-> route('suppliers.index')->with('success',$supplier_name.' Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Supplier $supplier)
    {
        /**
         * get the @ID of the Supplier and Show
         */
     return view('supplier.suppliers.show',compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
