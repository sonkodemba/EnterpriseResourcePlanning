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
        $suppliers = Supplier::paginate(4);
        return view('item.supplier.suppliers.index',compact('suppliers'));

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
        return view('item.supplier.suppliers.create');
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
        $tin_no = $supplier -> tin = $request['tin'];

        if ($request->file('gppa_license')) {
            $gppa_lic = $request->file('gppa_license');
            $extension = $gppa_lic->getClientOriginalExtension();
            $filename = $gppa.'_'.time().'.' . $extension;
            $gppa_lic->move('upload/gppa', $filename);
            $supplier->gppa_license = $filename;
        }

        else{
            return $request;
            $supplier->gppa_license = '';
        }

        if ($request -> file('trade_license')){
            $trade_lic = $request -> file('trade_license');
            $ext = $trade_lic -> getClientOriginalExtension();
            $fname = $trade.'_'.time().'.'.$ext;
            $trade_lic -> move('upload/trade_License', $fname);
            $supplier -> trade_license = $fname;
        }
        else{
            return $request;
            $supplier->trade_license = '';
        }
        if ($request -> file('tin_certificate')){
            $tin_cert = $request->file('tin_certificate');
            $tin_ext = $tin_cert -> getClientOriginalExtension();
            $tin_file_name = $tin_no.'_'.time().'.'.$tin_ext;
            $tin_cert -> move('upload/tin_certificate',$tin_file_name);
        }
        else{
            return $request;
            $supplier -> tin_certificate = $tin_file_name;
        }
        $supplier -> trade_license = $request['trade_license'];
        $supplier -> address = $request['address'];
        $supplier -> telephone = $request['telephone'];
        $supplier -> email = $request['email'];

         $supplier -> save();
        return redirect()-> route('suppliers.index')
            ->with('success',ucfirst($supplier_name).' Added Successfully');
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
     return view('item.supplier.suppliers.show',compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Supplier $supplier)
    {
        //
        return view('item.supplier.suppliers.edit',compact('supplier'));
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
