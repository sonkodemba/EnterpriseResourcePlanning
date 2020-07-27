@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Registered Batch</span>
                            <span class="info-box-number">
                                                   <h3>{{count(\App\Batch::all())}}</h3>
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-tags"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Supplier Category</span>
                            <span class="info-box-number"><h3>{{count(\App\SupplierCategory::all())}}</h3></span>
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
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-cash-register"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Supplier</span>
                            <span class="info-box-number"><h3>{{count(\App\Supplier::all())}}</h3></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-tags"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Inventory</span>
                            <span class="info-box-number">
                                <h3>{{round(count(\App\Item::all()))}}</h3>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="float-md-left">
                                    <div>
                                        <i class="fa fa-building">
                                            List of Employment Categories
                                        </i>
                                    </div>
                                </h2>
                                <a   href="{{route('departments.create')}}" class="btn btn-success float-md-right">
                                    <i class="fa fa-plus-circle">New</i>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if(count($categories) > 0)
                                    <table id="example2" class="table  table-hover">
                                        <thead>
                                        <tr>
                                             <th>Code</th>
                                            <th>Name</th>
                                            <th>Duration</th>
                                             <th>Descriptions</th>
                                            <th>Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as  $category)
                                            <tr>
                                                 <td>{{$category -> code}}</td>
                                                <td>
                                                    <a href="{{route('categories.show', $category -> id)}}">
                                                        {{$category -> name}}
                                                    </a>
{{--                                                    <span class="badge btn-outline-success float-sm-r   ight">{{count($category -> employee)}}</span><br>--}}
{{--                                                    <span class="badge btn-outline-success">{{count($category ->)}}</span>--}}
                                                </td>
                                                <td>{{$category -> duration}}</td>
                                                 <td>{{$category -> descriptions}}</td>
                                                <td>
                                                    <a href="{{route('departments.edit', $category -> id)}}" class="btn btn-outline-warning"><i class="fa fa-pencil-alt"></i> </a>


                                                    <a class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i> </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                    {{$categories-> links()}}
                                @else
                                    <p class="badge btn-outline-danger">
                                        No Data About Category in the Database
                                    </p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

