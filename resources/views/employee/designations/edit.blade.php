@extends('layouts.admin')
{{--@section('content')--}}

{{--    @extends('layouts.admin')--}}
@section('content')
    <!-- Horizontal Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Create New Department</div>
                    <form class="form-horizontal" action="/departments/{{$departments->id}} method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{$department -> name}}" class="form-control" id="Name" placeholder="eg: Information Technology Department">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Name" class="col-sm-2 col-form-label">Descriptions</label>
                                <div class="col-sm-10">
                                    <textarea  name="{{$department -> descriptions}}" class="form-control" id="staffid" placeholder="eg: This is the IT Department"></textarea>
                                </div>
                            </div>

                        <!-- /.card-body -->
                            <div class="card-footer">
                                <button  type="submit" class="btn btn-primary"> Save</button>
                                <a href="{{route('departments.index')}}" class="btn btn-secondary">Cancel</a>
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

@endsection

@endsection
