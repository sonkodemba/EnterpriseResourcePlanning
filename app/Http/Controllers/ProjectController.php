<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('pms.projects.index',compact('projects'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        return view('pms.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Project $project)
    {
        $project -> name = $request['name'];
        $project -> code = $request['code'];
        $project -> descriptions = $request['descriptions'];
        $project -> duration = $request['duration'];
        $project -> status_id = $request['status'];
//        $project -> user_id = auth() -> user()->id;
        $project -> company_id = $request['company'];

        /**
         *  +--------------+-----------------+------+-----+---------+----------------+
            | Field        | Type            | Null | Key | Default | Extra          |
            +--------------+-----------------+------+-----+---------+----------------+
            | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
            | name         | varchar(255)    | NO   | UNI | NULL    |                |
            | code         | varchar(255)    | NO   | UNI | NULL    |                |
            | descriptions | longtext        | YES  |     | NULL    |                |
            | duration     | int unsigned    | NO   |     | NULL    |                |
            | status_id    | bigint unsigned | NO   | MUL | NULL    |                |
            | user_id      | bigint unsigned | NO   | MUL | NULL    |                |
            | company_id   | bigint unsigned | NO   | MUL | NULL    |                |
            | deleted_at   | timestamp       | YES  |     | NULL    |                |
            | created_at   | timestamp       | YES  |     | NULL    |                |
            | updated_at   | timestamp       | YES  |     | NULL    |                |
            +--------------+-----------------+------+-----+---------+----------------+
         */

        $project -> save();
        return redirect() -> route('projects.index')-> with('success', 'project created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Project $project)
    {
        //
        return view('pms.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Project $project)
    {
        //
        return view('pms.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Project $project)
    {
        //
        $projects = Project::find($project -> id);
        $pname = $project -> name = $request['name'];
        $projects -> code = $request['code'];
        $projects -> descriptions = $request['descriptions'];
        $projects -> duration = $request['duration'];
        $projects -> status_id = $request['status'];
        $projects -> company_id = $request['company'];
        $projects -> save();
        return redirect() -> route('projects.index')-> with('success', $pname.' updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($project)
    {
        //
        Project::destroy($project);
        return redirect()-> route('projects.index')-> with('success');
    }
}
