@extends('layouts.admin')
@section('content')
<!-- Main content -->
<section class="jumbotron" style="padding-top: 15px">
        <div class="align-content-center">
{{--            <div class="row">--}}
{{--                <div class="col-12 col-sm-12 col-md-3">--}}
{{--                    <div class="info-box">--}}
{{--                    <span class="info-box-icon bg-info elevation-1">--}}
{{--                        <img src="{{asset('upload/Nawec/Nawec.jpeg')}}" height="70">--}}
{{--                    </span>--}}

{{--                        <div class="info-box-content">--}}
{{--                            <span class="info-box-text">Total Success Transaction</span>--}}
{{--                            <span class="info-box-number">--}}
{{--                           <h3>{{\App\Evend::all() -> count()}}</h3>--}}
{{--                </span>--}}
{{--                        </div>--}}
{{--                        <!-- /.info-box-content -->--}}
{{--                    </div>--}}
{{--                    <!-- /.info-box -->--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--                <div class="col-12 col-sm-6 col-md-3">--}}
{{--                    <div class="info-box mb-3">--}}
{{--                        <span class="info-box-icon bg-danger elevation-1"><i class="fa-money-bill-wave"></i></span>--}}

{{--                        <div class="info-box-content">--}}
{{--                            <span class="info-box-text">Total Commission</span>--}}
{{--                            <span class="info-box-number">--}}
{{--                            <h3>{{0.0}} </h3>--}}
{{--                        </span>--}}
{{--                        </div>--}}
{{--                        <!-- /.info-box-content -->--}}
{{--                    </div>--}}
{{--                    <!-- /.info-box -->--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}

{{--                <!-- fix for small devices only -->--}}
{{--                <div class="clearfix hidden-md-up"></div>--}}

{{--                <div class="col-12 col-sm-6 col-md-3">--}}
{{--                    <div class="info-box mb-3">--}}
{{--                    <span class="info-box-icon bg-success elevation-1">--}}
{{--                        <img src="{{asset('upload/Nawec/Domestic_Meter.jpg')}}" height="80" width="100">--}}
{{--                    </span>--}}

{{--                        <div class="info-box-content">--}}
{{--                            <span class="info-box-text">Commercial Meters</span>--}}
{{--                            <span class="info-box-number"><h3></h3></span>--}}
{{--                        </div>--}}
{{--                        <!-- /.info-box-content -->--}}
{{--                    </div>--}}
{{--                    <!-- /.info-box -->--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--                <div class="col-12 col-sm-6 col-md-3">--}}
{{--                    <div class="info-box mb-3">--}}
{{--                    <span class="info-box-icon bg-warning elevation-1">--}}
{{--                        <img src="{{asset('upload/Nawec/Meter.jpeg')}}">--}}
{{--                    </span>--}}

{{--                        <div class="info-box-content">--}}
{{--                            <span class="info-box-text">Domestic Meters</span>--}}
{{--                            <span class="info-box-number">--}}
{{--                                <h3></h3>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <!-- /.info-box-content -->--}}
{{--                    </div>--}}
{{--                    <!-- /.info-box -->--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--            </div>--}}

            <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">


                         <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Meter Name.:</b> <a class="float-right" style="color: red">{{$evend -> meter_name}}</a>
                            </li>

                        </ul>

                             <li class="list-group-item">
                                <b>Telephone No.:</b> <a class="float-right">7985698</a>
                            </li>
                            <li class="list-group-item">
                                <b>Pole No:</b> <a class="float-right">LKS 3.56</a>
                            </li>
                            <li class="list-group-item">
                                <b>Meter Category</b> <a class="float-right">Domestic</a>
                            </li>
                        </ul>

                     </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About {{$evend -> meter_num}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                        <p class="text-muted">Latrikunda Sabiji</p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Coordinates</strong>

                        <p class="text-muted">
                           00
                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <a class="float-md-right btn btn-warning"  href="{{route('evends.index')}}"><i class="fa fa-backward"> Back</i> </a>

                        <ul class="nav nav-pills">
                          </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
 <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-credit-card ">
                                Transaction Details for <strong style="color: red"> {{$evend -> meter_num}}</strong>
                            </i>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if($evend -> count() > 0)
                             <table id="example2" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>User</th>
                                    <th>Receipt No.</th>
                                    <th>Token</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($evend->getVendByMeterNumber() as $transaction)
                                    <tr style="color: blue">
                                        <td>{{$transaction -> created_at}}</td>
                                        <td>
                                             {{$transaction -> user->name}}
                                        </td>
                                        <td>434556/32345</td>
                                        <td>{{$transaction -> generated_token}}</td>
                                        <td style="color: red">{{$transaction -> amount}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                         @else
                            <div class=" alert alert-danger alert-dismissible fade show"
                                 role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <strong> Transaction Details <br> </strong>
                                <p>There is No Listed Transaction for {{$evend -> meter_num}}</p>
                        @endif
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
