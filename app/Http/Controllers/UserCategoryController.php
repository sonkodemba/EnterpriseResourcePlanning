<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCategoryFormRequest;
use App\UserCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class UserCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $userCategory = UserCategory::latest() -> paginate(4);
        return view('users.usercategories.index', compact('userCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('users.usercategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserCategoryFormRequest $request
     * @param UserCategory $category
     * @return RedirectResponse
     */
    public function store(UserCategoryFormRequest $request, UserCategory $category)
    {
        //
    $category -> code = $request['code'];
    $name = $category -> name = $request['name'];
    $category -> descriptions = $request['descriptions'];
        $saved  = $category -> save();


        if ($saved){
            return redirect() -> route('usercategories.index') -> with('success', $name.' Created Successfully');
        }
        else{
            return  redirect() -> route('usercategories.index') -> with('error',$name.' Culd Not be Created Successfully');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param UserCategory $userCategory
     * @return Application|Factory|View
     */
    public function show(UserCategory $userCategory)
    {
        return \view('users.usercategories.show', compact($userCategory));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param UserCategoryFormRequest $request
     * @param UserCategory $userCategory
     * @return Application|Factory|View
     */
    public function edit(UserCategory $userCategory)
    {

       return \view('users.usercategories.edit', compact($userCategory));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserCategoryFormRequest $request
     * @param UserCategory $userCategory
     * @return RedirectResponse
     */
    public function update(UserCategoryFormRequest $request, UserCategory $userCategory)
    {
        $userCategory -> code = $request['code'];
        $name = $userCategory -> name = $request['name'];
        $userCategory -> descriptions = $request['descriptions'];
        $updated = $userCategory -> save();
        if ($updated){
            return redirect() -> route('usercategories.index') -> with('success', strtoupper($name).' Updated SuccessFully');
        }
        else{
            return redirect() -> route('usercategories.index') -> with('error', strtoupper($name).' Could not up Updated ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param UserCategory $userCategory
     * @return RedirectResponse
     */
    public function destroy(UserCategory $userCategory)
    {
        $userCategory -> delete();
        return  redirect() -> route('usercategories.index') -> with('success', $userCategory -> name.' Deleted SuccessFully');
    }
}
