@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Employee</div>
    <form class="form-horizontal" action="/employees/{{$employee->id}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="card-body">
            <div class="form-group row">
                <label for="Name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{$employee -> name}}" class="form-control" id="Name" placeholder="Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="Name" class="col-sm-2 col-form-label">Staff ID</label>
                <div class="col-sm-10">
                    <input type="number" name="staff_id" value="{{$employee->staff_id}}" class="form-control" id="staffid" placeholder="Staff ID">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="{{$employee->email}}" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="post" class="col-sm-2 col-form-label">Post</label>
                <div class="col-sm-10">
                    <input type="text" name="post" value="{{$employee->post}}" class="form-control" id="post" placeholder="post">
                </div>
            </div>

            <div class="form-group row">
                <label for="post" class="col-sm-2 col-form-label">Upload</label>
                <div class="file col-sm-10">
                    <input type="file" name="image" value="{{$employee->image}}" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i>
                Save</button>
        </div>
        <!-- /.card-footer -->
    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
