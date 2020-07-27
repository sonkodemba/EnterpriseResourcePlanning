@extends('layouts.admin')
@section('content')
    <!-- Horizontal Form -->

    <div class="jumbotron" style="padding-top: 10px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>
                            <i class="fa fa-user-secret">
                            Create User Group / Category
                            </i>
                        </h2>
                    </div>
                    <form class="form-horizontal" action="{{route('usercategories.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Code" class="col-sm-2 col-form-label">Code</label>
                                <div class="col-sm-10">
                                    <input style="background-color: lightyellow" type="text" name="code" class="form-control" id="Name" placeholder="ADMIN">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input style="background-color: lightyellow" type="text" name="name" class="form-control" id="Name" placeholder="Administrator">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Name" class="col-sm-2 col-form-label">Descriptions</label>
                                <div class="col-sm-10">
                                    <textarea style="background-color: lightyellow" name="descriptions" class="form-control" id="staffid" placeholder="Administrator is Responsible for The  Dayto Day Administering"></textarea>
                                </div>
                            </div>

                                <div class="card-footer">
                                    <small class="badge btn-outline-danger">Be Responsible When Adding Data</small>
                                    <div class="float-md-right">
                                        <button  type="submit" class="btn btn-success">
                                            <i class="fa fa-save">Save</i>
                                        </button>
                                        <a href="{{route('usercategories.index')}}" class="btn btn-warning">
                                            <i class="fa fa-backward"></i>
                                            Back
                                        </a>
                                    </div>
                        <!-- /.card-footer -->
                                </div>
                        </div>
                    </form>
                </div>
                <div>
                </div>

            </div>
{{--        @endcan--}}

        <!-- /.card -->
        </div>
    </div>
    </div>
@endsection
