<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class EmployeeController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $employees = Employee::paginate(3);
        return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
        return  view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Employee $employee
     * @param Request $request
     * @return string
     */
    public function store(Request $request, Employee $employee)
    {

//        $employee = new Employee();
        $employee -> name = $request['name'];
       $staff_id =  $employee->staff_id = $request['staff_id'];
        $employee -> email = $request['email'];
        $employee->employee_education_id = $request['education_id'];
        $employee -> education = $request['education'];
        if ($request->file('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
        $filename = $staff_id.'.'.$extension;
            $file->move('upload/profile',$filename);
            $employee -> image = $filename;
        }else{
            return $request;
            $employee->image = '';
        }
        $employee -> department_id = $request['department'];
        $employee -> designation_id = $request['designation'];
        $employee -> address = $request['address'];
        $employee -> telephone_num = $request['telephone_num'];

        $employee->save();
        return redirect()->route('employees.index')->with('success',$employee->name.' Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Employee $employee)
    {
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Employee $employee)
    {
        $employee = Employee::find($employee->id);
        return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Employee  $employee
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
        $employee = Employee::find($id);
        $employee -> name = $request['name'];
        $staff_id = $employee->staff_id = $request['staff_id'];
        $employee->email = $request['email'];
        $employee->post = $request['post'];

        if ($request->file('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $staff_id.'.'.$extension;
            $file->move('upload/profile',$filename);
            $employee -> image = $filename;
        }else{
            return $request;
            $employee->image = '';
        }
        $employee->save();
        return redirect()->route('employees.index')->with('info','Employee Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return RedirectResponse
     */
    public function destroy(Request $request)
    {
        $employee =Employee::find($request->id);
        $employee->delete();
        return redirect()->route('employees.index')->with('employee',$employee);
    }
}
