@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px; padding-bottom: 10px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-header">New Project</div>
                        <div class="card-body">
                            <form ction="/projects/{{$project->id}}" method="post">
                                {{method_field('PUT')}}
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                        </div>
                                        <input type="text" value="{{$project -> name}}" class="form-control" placeholder="Name" name="name">
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
                                        <input type="text" value="{{$project ->code}}" placeholder="Project Code" name="code" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- phone mask -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-project-diagram"></i></span>
                                        </div>
                                        <input type="text" value="{{$project -> descriptions}}" class="form-control" placeholder="Descriptions" name="descriptions" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- phone mask -->
                                <div class="form-group">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" value=" {{$project->duration}}" class="form-control" name="duration" placeholder="Duration in Months">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- IP mask -->
                                <div class="form-group">
                                    <select  name="status" class="form-control select2" style="width: 100%;">
                                        <option value="{{$project -> id}}" @if($project -> status =='---Select Project Status --' ) {{$project -> status}}@endif selected="selected">---Select Project Status --</option>
                                        @foreach($projectStatus as $status)
                                            <option value="{{$status -> id}}">{{$status -> name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <select  name="company" class="form-control select2" style="width: 100%;">
                                        <option selected="selected">---Select Company --</option>
                                        @foreach($companies as $company)
                                            <option value="{{$company -> id}}">{{$company -> name}}</option>
                                        @endforeach
                                    </select>
                                </div>

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
