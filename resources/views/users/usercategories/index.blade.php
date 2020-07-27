@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 10px">

<div class="container">
<div class="row">
    <div class="col-12 col-sm-12 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number">
                                {{count(\App\UserCategory::all())}}
                     </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Offline Users</span>
                <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Online Users</span>
                <span class="info-box-number">00</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Total Registered Users </span>
                <span class="info-box-number">{{count(\App\User::all())}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <h2 style="margin-left: 40px; margin-top: 20px; margin-bottom: 5px">
                <i class="fa fa-user-cog">
                    List of User Group
                </i>
            </h2>
            @if(count($userCategory) > 0)
                <div class="card-body">
                    <table class="table table-hover tab-custom-content">
                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th >Descriptions</th>
                             <th>
                                <a class="btn btn-success float-md-right" href="{{route('usercategories.create')}}">
                                    <i class="fa fa-plus-circle">Create Group</i>
                                </a>

                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($userCategory as $user)
                            <tr>

                                <td>{{$user->code}}</td>
                                <td>
                                    {{$user -> name}}
                                </td>
                                <td>{{$user-> descriptions}}</td>
                                <td>

                                </td>
                                <td>
                                    <a class="btn btn-outline-warning" href="{{route('usercategories.edit',$user -> id)}}"><i class="fa fa-pencil-alt"></i></a>
                                    <a class="btn btn-outline-danger" href="#"><i class="fa fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$userCategory -> links()}}
                    @else
                        <div class="badge btn-outline-danger">No User Group Define
                            <a style="margin-right: 20px; margin-top: 10px; margin-bottom: 10px" class="btn btn-success float-lg-right" href="{{route('usercategories.create')}}">
                                <i class="fa fa-user-secret">
                                    New
                                </i>
                            </a>
                        </div>

                    @endif
                </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
