<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        //
        $companies = Company::all();
        return  view('pms.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        //
        return view('pms.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Company $company
     * @return RedirectResponse
     */
    public function store(Request $request, Company $company)
    {
        /**
          * +--------------+-----------------+------+-----+---------+----------------+
            | Field        | Type            | Null | Key | Default | Extra          |
            +--------------+-----------------+------+-----+---------+----------------+
            | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
            | name         | varchar(255)    | NO   |     | NULL    |                |
            | descriptions | longtext        | YES  |     | NULL    |                |
            | deleted_at   | timestamp       | YES  |     | NULL    |                |
            | created_at   | timestamp       | YES  |     | NULL    |                |
            | updated_at   | timestamp       | YES  |     | NULL    |                |
            +--------------+-----------------+------+-----+---------+----------------+

         */
        $company_name = $company -> name = $request['name'];
        $company -> descriptions = $request['descriptions'];
        $company -> save();
        return redirect() -> route('companies.index')-> with('success', $company_name.' created Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param Company $id
     * @return Factory|View
     */
    public function show(Company $id)
    {
        //
        $company = Company::find($id -> id);
        return  view('pms.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return Factory|View
     */
    public function edit(Company $company)
    {
        //
        return  view('pms.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
