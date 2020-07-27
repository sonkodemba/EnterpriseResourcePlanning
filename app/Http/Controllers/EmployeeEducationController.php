<?php

namespace App\Http\Controllers;

use App\EmployeeEducation;
use App\Http\Requests\EmployeeEducationFormRequest;
use Illuminate\Http\Request;

class EmployeeEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //
        $educations = EmployeeEducation::paginate(4);
        return view('employee.educations.index',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
        return view('employee.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param EmployeeEducation $education
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EmployeeEducationFormRequest $request, EmployeeEducation $education)
    {

        $education_name = $education->education = $request['name'];
        $education->descriptions = $request['descriptions'];
        $education->save();
        return redirect()->route('educations.index')
            ->with('success', ucfirst($education_name) . ' Added Successfully');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\EmployeeEducation  $employeeEducation
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(EmployeeEducation $employeeEducation)
    {
        //
        return view('employee.educations.show', compact('employeeEducation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmployeeEducation  $employeeEducation
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(EmployeeEducation $employeeEducation)
    {
        //
        return view('employee.educations.edit', compact('employeeEducation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmployeeEducation  $employeeEducation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeEducation $employeeEducation)
    {
        //
        $id = EmployeeEducation::find($employeeEducation -> id);
        $id -> education = $request['name'];
        $id -> descriptions = $request['descriptions'];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmployeeEducation  $employeeEducation
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeEducation $employeeEducation)
    {
        //
    }
}
