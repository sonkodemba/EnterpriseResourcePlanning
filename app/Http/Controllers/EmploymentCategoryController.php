<?php

namespace App\Http\Controllers;

use App\EmploymentCategory;
use App\Http\Requests\EmploymentCategoryRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class EmploymentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = EmploymentCategory::latest() -> paginate(4);
        return \view('employee.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {

        return view('employee.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmploymentCategoryRequest $request
     * @param EmploymentCategory $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EmploymentCategoryRequest $request, EmploymentCategory $category)
    {
        $category -> code = $request['code'];
        $category -> name = $request['name'];
        $category -> duration = $request['duration'];
        $category -> descriptions = $request['descriptions'];
        $saved = $category -> save();
        if ($saved){
            return redirect() -> route('categories.index') -> with('success', strtoupper($saved).' Created SuccessFully');
        }
        else{
            return  redirect() -> route('categories.index') -> with('error', 'ERROR Saving Data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\EmploymentCategory $employmentCaregory
     * @return void
     */
    public function show(EmploymentCategory $employmentCaregory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmploymentCategory  $employmentCaregory
     * @return Response
     */
    public function edit(EmploymentCategory $employmentCaregory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmploymentCategory  $employmentCaregory
     * @return Response
     */
    public function update(Request $request, EmploymentCategory $employmentCaregory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmploymentCategory  $employmentCaregory
     * @return Response
     */
    public function destroy(EmploymentCategory $employmentCaregory)
    {
        //
    }
}
