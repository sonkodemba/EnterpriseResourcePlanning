@extends('layouts.admin')
@section('content')
    <!-- Horizontal Form -->
    <div class="jumbotron" style="padding-top: 10px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">

                        <div class="card-header">
                            <h3>Create New Qualification</h3>
                        </div>
                        <form class="form-horizontal" action="{{route('educations.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="Name" class="col-sm-2 col-form-label">Qualification</label>
                                    <div class="col-sm-10">
                                        <input style="background-color: lightyellow" type="text" name="name" class="form-control" id="Name" placeholder="BSc. / Btech">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Name" class="col-sm-2 col-form-label">Descriptions</label>
                                    <div class="col-sm-10">
                                        <textarea style="background-color: lightyellow" name="descriptions" class="form-control" id="staffid" placeholder="Describe the Above Qualifications"></textarea>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="float-md-right">
                                        <button  type="submit" class="btn btn-success">
                                            <i class="fa fa-save">Save</i>
                                        </button>
                                        <a href="{{route('educations.index')}}" class="btn btn-warning">
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
