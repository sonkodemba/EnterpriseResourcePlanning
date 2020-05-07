@extends('layouts.admin')
@section('content')
    <!-- Horizontal Form -->
    <div class="jumbotron" style="padding-top: 10px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                <div class="card-header">Create New Employee</div>
         <form class="form-horizontal" action="{{route('employees.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="Name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="Name" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Name" class="col-sm-2 col-form-label">Staff ID</label>
                    <div class="col-sm-10">
                        <input type="number" name="staff_id" class="form-control" id="staffid" placeholder="Staff ID">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Department" class="col-sm-2 col-form-label">Education</label>
                    <div class="col-sm-10" >
                        <select name="education_id" id="departmentId" class="selectpicker" data-style="select-with-transition" title="departmentTitle">
                            @foreach($empEducation as $Education)
                                <option value="{{$Education -> id}}">{{$Education -> highest_education}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Discipline</label>
                    <div class="col-sm-10">
                        <input type="text" name="education" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                    <div class="form-group row">
                        <label for="post" class="col-sm-2 col-form-label">Upload</label>
                            <div class="file col-sm-10">
                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="Department" class="col-sm-2 col-form-label">Department</label>
                        <div class="col-sm-10" >
                            <select name="department" id="departmentId" class="selectpicker" data-style="select-with-transition" title="departmentTitle">
                                @foreach($departments as $department)
                                    <option value="{{$department -> id}}">{{$department -> name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <label for="Designations" class="col-sm-2 col-form-label">Designations</label>
                        <div class="col-sm-10" >
                            <select name="designation" id="designationId" class="selectpicker" data-style="select-with-transition" title="designationTitle">
                                @foreach($designations as $designation)
                                    <option value="{{$designation -> id}}">{{$designation -> name}}</option>
                                @endforeach
                            </select>
                        </div>



                </div>
                <div class="form-group row">
                    <label for="post" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" id="post" placeholder="Eg: Latrikunda Sabiji">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telephone_number" class="col-sm-2 col-form-label">Telephone No:</label>
                    <div class="col-sm-10">
                        <input type="number" name="telephone_num" class="form-control" id="post" placeholder="post">
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button  type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    Save</button>
                <a href="{{route('employees.index')}}" class="btn btn-warning">
                    <i class="fa fa-trash-alt"></i>
                    Cancel</a>
            </div>
            <!-- /.card-footer -->
        </form>
        </div>
        <div>
         </div>

    </div>
    <!-- /.card -->
            </div>
        </div>
    </div>

    @endsection
