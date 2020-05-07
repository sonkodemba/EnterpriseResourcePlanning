<?php

namespace App\Http\Controllers;

use App\ProjectUser;
use Illuminate\Http\Request;

class ProjectUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //
        return view('pms.projectusers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
        return view('pms.projectusers.create');
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
        $puser = new ProjectUser();
        $puser -> project_id = $request['project'];
        $puser ->employee_id = $request['employeeId'];
        $puser -> save();
        return redirect() -> route('projects.index')-> with('sucess', 'Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectUser  $projectUser
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectUser $projectUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectUser  $projectUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectUser $projectUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectUser  $projectUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectUser $projectUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectUser  $projectUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectUser $projectUser)
    {
        //
    }
}
