@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px; padding-bottom: 10px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">New Company</div>
                    <div class="card-body">
                <form action="{{route('companies.store')}}" method="post">
                    @csrf
                <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Company Name" name="name">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date mm/dd/yyyy -->
                <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-xbox"></i></span>
                        </div>
                        <input type="text" placeholder="Company Descriptions" name="descriptions" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
                        <button  type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Save</button>
                        <a href="{{route('projects.index')}}" class="btn btn-warning">
                            <i class="fa fa-trash-alt"></i>
                            Cancel</a>
{{--                    </div>--}}
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
    </div>
    </div>
@endsection
