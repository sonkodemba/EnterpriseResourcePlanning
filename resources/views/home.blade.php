@extends('layouts.admin')
@section('content')
<div class="content-header" style="padding-top: 10px">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-friends"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Registered Users</span>
                        <span class="info-box-number">
                                                   <h3>{{count(\App\User::all())}}</h3>
                </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fa fa-user-friends"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Online User</span>
                        <span class="info-box-number"><h3>0</h3></span>
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
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-building"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"> No. Departments</span>
                        <span class="info-box-number"><h3></h3></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-building"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">No. Designations</span>
                        <span class="info-box-number">
                                <h3></h3>
                            </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
     <!-- TO DO List -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title ">
                            <i class="ion ion-clipboard mr-1"></i>
                            <div class="badge badge-success" >Online Users </div>
                        </h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table>
                            <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Location</th>
                            </tr>
                            </thead>
                            <tbody>
                        <ul class="todo-list" data-widget="todo-list">
                            <li>
                                <!-- drag handle -->
                                <span class="handle">
                                      <i class="fas fa-ellipsis-v"></i>
                                      <i class="fas fa-ellipsis-v"></i>
                                </span>
                                <!-- checkbox -->
                                <div  class="icheck-primary d-inline ml-2">
                                    <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                    <label for="todoCheck1"></label>
                                </div>
                                <!-- todo text -->
                                <span class="text">Design a nice theme</span>
                                <!-- Emphasis label -->
                                <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                                <!-- General tools such as edit or delete-->
                                <div class="tools">
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                    <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <a type="button" class="btn btn-success float-right">
                                        <i class="fas fa-plus"></i> Add item
                                    </a>
                                </div>
                            </li>
                        </ul>
                            </tbody>
                        </table>
                  </div>
                </div>
    </div>
</div>
@endsection
