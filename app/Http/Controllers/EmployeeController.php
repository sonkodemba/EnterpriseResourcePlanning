<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\EmployeeFormRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $employees = Employee::latest() -> paginate(4);
        return view('employee.employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return  view('employee.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmployeeFormRequest $request
     * @param Employee $employee
     * @return string
     */
    public function store(EmployeeFormRequest $request, Employee $employee)
    {

        $employee -> name = $request['name'];
       $staff_id =  $employee->staff_id = $request['staff_id'];
       $employee -> social_security_no = $request['social_security_no'];
        $employee -> email = $request['email'];
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
        $employee -> address = $request['address'];
        $employee -> telephone_num = $request['telephone_num'];

        $employee->save();
        return redirect()->route('employees.index')->with('success',$employee->name.' Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return Factory|View
     */
    public function show(Employee $employee)
    {
        return view('employee.employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return Factory|View
     */
    public function edit(Employee $employee)
    {
        $employee = Employee::find($employee->id);
        return view('employee.employees.edit',compact('employee'));
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
        return redirect()->route('employees.index')->with('success',$employee -> name.' Deleted Successfully');
    }
}
