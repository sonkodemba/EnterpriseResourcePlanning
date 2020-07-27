@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
        @if($serviceCharges -> count() > 0)
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
                                        <i class="fa fa-server">
                                            Service Charges
                                        </i>
                                    </div>
                                </h2>
                                <a   href="{{route('serviceCharges.create')}}" class="btn btn-success float-md-right">
                                    <i class="fa fa-plus-circle">New</i>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
{{--                                @if(count($departments) > 0)--}}
                                    <table id="example2" class="table  table-hover">
                                        <thead>
                                        <tr>
                                            <th>From (GMD'.00)</th>
                                            <th>To (GMD'.00)</th>
                                            <th>Transaction Fee (GMD '0.00')</th>
                                            <th>SMS Receipt Fee (GMD'0.00)</th>
                                            <th>CashPower Unit Vended</th>
                                            <th>Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($serviceCharges as  $charges)
                                            <tr>
                                                 <td>{{$charges -> from}}</td>
                                                <td>{{$charges -> to}}</td>
                                                <td>{{$charges -> transactionFee}}</td>
                                                <td>{{$charges -> eSMS_receipt_Fee}}</td>
                                                <td>{{$charges -> cashpower}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-warning"><i class="fa fa-pencil-alt"></i> </a>
                                                    <a href="#" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i> </a>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                {{$serviceCharges -> links()}}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </section>
        </div>
        @else
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">
                    <img src="{{asset('upload/logo/logo.png')}}" width="50" height="50">
                    Error
                    <div class="btn btn-success float-md-right">
                        <a href="{{route('serviceCharges.create')}}">
                            <i class="fa fa-credit-card">
                                New
                            </i>
                        </a>
                    </div>
                </h4>
                <hr>
                 <h3 class="mb-0"> There is No Data listed for Service Charges, Click "New" to Add</h3>

            </div>
        @endif

    </div>
@endsection

