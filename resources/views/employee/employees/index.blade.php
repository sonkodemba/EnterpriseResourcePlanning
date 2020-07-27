@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1">
                                <i class="fas fa-user-plus">
                                </i>
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Online User</span>
                                <span class="info-box-number">
                                    <h3></h3>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1">
                                <i class="fas fa-user-plus"></i>
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Inactive Employee</span>
                                <span class="info-box-number">
                                    @if(\App\Employee::where('deleted_at','!=',null))
                                        <h3>{{count(\App\Employee::where('deleted_at','!=',null)->get())}}</h3>
                                    @endif
                                </span>
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
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-plus"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Active Employee</span>
                                <span class="info-box-number">
                                    @if(\App\Employee::where('created_at','!=',null))
                                       <h3> {{count(\App\Employee::where('created_at','!=',null)->get())}}</h3>
                                        @endif
                                </span>
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
                                <span class="info-box-text">
                                   Total Employee
                                </span>
                                <span class="info-box-number">
                                     <h3>{{count(\App\Employee::all())}}</h3>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 >
                            <strong class="badge btn-outline-success float-left">
                            <i class="fa fa-user-plus"> Employees</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('employees.create')}}"><i class="fa fa-user-plus"></i></a>


                        </h3>
                    </div>

@if(count($employees) > 0)
  <div class="card-body">
    <table class="table table-hover">
        <thead>
        <tr>
            <th> ID</th>
            <th>Social Sec No</th>
            <th >Name</th>
            <th >Telephone No</th>
            <th >Address</th>
{{--            <th>Status</th>--}}
            <th>Action </th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
        <tr>

                <td>{{$employee->staff_id}}</td>
                <td>{{$employee -> social_security_no}}</td>
                    <td>
                       <a href="{{route('employees.show',$employee->id)}}" class="">
                           <img class="img-circle elevation-2" src="{{asset('upload/profile/'.$employee->image)}}" width="50" height="40" alt="">
                           {{$employee->name}}
                       </a>


                    </td>
                <td>
                    {{$employee-> telephone_num}}

                </td>
                <td>{{$employee->address}}</td>
                <td>
                </td>
                <td>
                     <a  class="btn btn-outline-warning" href="{{ route('employees.edit',$employee->id) }}"><i class="fa fa-pencil-alt"></i></a>
                    <a  class="btn btn-outline-danger" href="#"><i class="fa fa-trash-alt"></i></a>
                 </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$employees -> links()}}
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
