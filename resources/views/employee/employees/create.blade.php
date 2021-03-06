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
                    <label for="Name" class="col-sm-2 col-form-label">Social Security No.</label>
                    <div class="col-sm-10">
                        <input type="number" name="social_security_no" class="form-control" id="staffid" placeholder="Staff ID">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>

                    <div class="form-group row">
                        <label for="post" class="col-sm-2 col-form-label">Upload</label>
                            <div class="file col-sm-10">
                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
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
                <div class="float-md-right">
                    <button  type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i>
                        Save</button>
                    <a href="{{route('employees.index')}}" class="btn btn-warning">
                        <i class="fa fa-backward"></i>
                        Back
                    </a>
                </div>
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
