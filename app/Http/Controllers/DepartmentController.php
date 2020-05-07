<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $departments= Department::paginate(3);
        return  view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {

        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Department $department
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request, Department $department)
    {
        $department -> name = $request['name'];
        $department -> descriptions = $request['descriptions'];
        $department -> save();
        return redirect()->route('departments.index') -> with('success', 'department successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return Factory|View
     */
    public function show(Department $department)
    {

        return view('departments.show', compact('department'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return Factory|View
     */
    public function edit(Department $department)
    {
        //
        $department = Department::find($department);
        return  view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }
}
