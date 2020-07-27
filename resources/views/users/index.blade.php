@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">In Active Users</span>
                            <span class="info-box-number">
{{--                                {{count($supplierProvider -> item)}}--}}
                                                  <small>%</small>
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
                                <div class="card-title">
                                    <h2 style="margin-left: 20px; margin-top: 10px; margin-bottom: 10px">
                                        <i class="fas fa-users">
                                            List of Users
                                        </i>
                                        <a style="margin-right: 20px; margin-top: 20px;" class="btn btn-success float-lg-right" href="{{route('register')}}"><i class="fa fa-plus-circle">New User</i></a>

                                    </h2>

                                </div>

                        @if(count($users) > 0)
                            <div class="card-body">
                                <table class="table table-hover tab-custom-content">
                                    <thead>
                                    <tr>
                                        <th>Staff ID</th>
                                        <th>Username</th>
                                        <th>Group</th>
                                        <th >Email</th>
                                         <th >Status</th>
                                        <th >Actions </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>

                                            <td>{{$user->staff_id}}</td>
                                            <td>
                                                <a href="{{route('users.show', $user -> id)}}">
                                                    {{$user -> name}}
                                                </a>
                                            </td>
                                            <td>{{$user -> role -> name}}</td>
                                            <td>{{$user-> email}}</td>
                                             <td>
                                                @if(auth() -> check())
                                                    <div class="badge badge-success" >
                                                        <i class="fa fa-user">
                                                            Online
                                                        </i>
                                                    </div>

                                                @else
                                                      <div class="badge badge-danger" >
                                                          <i class="fa fa-user"> OffLine</i>
                                                      </div>
                                                @endif

                                            </td>
                                            <td>
                                                 <a class="btn btn-outline-success" href="#"><i class="fa fa-key"> Change Password</i></a>
                                                <a class="btn btn-outline-warning" href="{{route('users.edit',$user -> id)}}"><i class="fa fa-pencil-alt"></i></a>
                                                <a class="btn btn-outline-danger" href="#"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$users -> links()}}
                                @else
                                    <div class="badge badge-danger">Employee Listed, Click on "New" to Add</div>
                                @endif
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
