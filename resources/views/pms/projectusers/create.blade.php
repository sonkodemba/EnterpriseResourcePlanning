@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px; padding-bottom: 10px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">New Project User</div>
                    <div class="card-body">
                <form action="{{route('projectusers.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <select  name="project" class="form-control select2" style="width: 100%;">
                            <option selected="selected">---Select Project --</option>
                            @foreach($project as $proj)
                                <option value="{{$proj -> id}}">{{$proj -> name}}</option>
                            @endforeach

                        </select>
                        <br>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-project-diagram"></i></span>
                        </div>
                        <input type="number"  class="form-control" placeholder="Project User Staff ID" name="employeeId" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div>
                    <!-- /.input group -->
                </div>


                <!-- /.form group -->

                <!-- phone mask -->
{{--                <div class="form-group">--}}

{{--                    <div class="input-group">--}}
{{--                        <div class="input-group-prepend">--}}
{{--                            <span class="input-group-text"><i class="fas fa-phone"></i></span>--}}
{{--                        </div>--}}
{{--                        <input type="text" class="form-control" name="duration" placeholder="Duration in Months">--}}
{{--                    </div>--}}
{{--                    <!-- /.input group -->--}}
{{--                </div>--}}
                <!-- /.form group -->

                <!-- IP mask -->

                    <br>
{{--                </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <select  name="company" class="form-control select2" style="width: 100%;">--}}
{{--                            <option selected="selected">---Select Company --</option>--}}
{{--                            @foreach($companies as $company)--}}
{{--                                <option value="{{$company -> id}}">{{$company -> name}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}

                <!-- /.form group -->
{{--                    <div class="card-footer">--}}
                        <button  type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Save</button>
                        <a href="{{route('projects.index')}}" class="btn btn-secondary">Cancel</a>
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
