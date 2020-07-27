@extends('layouts.admin')
@section('content')

    @if($evends -> count() > 0)
        <div class="jumbotron" style="padding-top: 15px">
    <!-- Content Wrapper. Contains page content -->
    {{--        <div class="align-content-center">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-12 col-sm-12 col-md-3">--}}
    {{--                <div class="info-box">--}}
    {{--                    <span class="info-box-icon bg-info elevation-1">--}}
    {{--                        <img src="{{asset('upload/Nawec/Nawec.jpeg')}}" height="70">--}}
    {{--                    </span>--}}

    {{--                    <div class="info-box-content">--}}
    {{--                        <span class="info-box-text">Total Success Transaction</span>--}}
    {{--                        <span class="info-box-number">--}}
    {{--                           <h3>{{\App\Evend::all() -> count()}}</h3>--}}
    {{--                </span>--}}
    {{--                    </div>--}}
    {{--                    <!-- /.info-box-content -->--}}
    {{--                </div>--}}
    {{--                <!-- /.info-box -->--}}
    {{--            </div>--}}
    {{--            <!-- /.col -->--}}
    {{--            <div class="col-12 col-sm-6 col-md-3">--}}
    {{--                <div class="info-box mb-3">--}}
    {{--                    <span class="info-box-icon bg-danger elevation-1"><i class="fa-money-bill-wave"></i></span>--}}

    {{--                    <div class="info-box-content">--}}
    {{--                        <span class="info-box-text">Total Commission</span>--}}
    {{--                        <span class="info-box-number">--}}
    {{--                            <h3>{{0.0}} </h3>--}}
    {{--                        </span>--}}
    {{--                    </div>--}}
    {{--                    <!-- /.info-box-content -->--}}
    {{--                </div>--}}
    {{--                <!-- /.info-box -->--}}
    {{--            </div>--}}
    {{--            <!-- /.col -->--}}

    {{--            <!-- fix for small devices only -->--}}
    {{--            <div class="clearfix hidden-md-up"></div>--}}

    {{--            <div class="col-12 col-sm-6 col-md-3">--}}
    {{--                <div class="info-box mb-3">--}}
    {{--                    <span class="info-box-icon bg-success elevation-1">--}}
    {{--                        <img src="{{asset('upload/Nawec/Domestic_Meter.jpg')}}" height="80" width="100">--}}
    {{--                    </span>--}}

    {{--                    <div class="info-box-content">--}}
    {{--                        <span class="info-box-text">End of Day</span>--}}
    {{--                        <span class="info-box-number"><h3>--}}
    {{--                                @foreach(\App\Evend::where('created_at', '=',now()) as $data))--}}
    {{--                                    {{$data -> amount}}--}}
    {{--                                @endforeach--}}
    {{--                            </h3></span>--}}
    {{--                    </div>--}}
    {{--                    <!-- /.info-box-content -->--}}
    {{--                </div>--}}
    {{--                <!-- /.info-box -->--}}
    {{--            </div>--}}
    {{--            <!-- /.col -->--}}
    {{--            <div class="col-12 col-sm-6 col-md-3">--}}
    {{--                <div class="info-box mb-3">--}}
    {{--                    <span class="info-box-icon bg-warning elevation-1">--}}
    {{--                        <img src="{{asset('upload/Nawec/Meter.jpeg')}}">--}}
    {{--                    </span>--}}

    {{--                    <div class="info-box-content">--}}
    {{--                        <span class="info-box-text">Domestic Meters</span>--}}
    {{--                        <span class="info-box-number">--}}
    {{--                                <h3>{{round(count(\App\Item::all()))}}</h3>--}}
    {{--                            </span>--}}
    {{--                    </div>--}}
    {{--                    <!-- /.info-box-content -->--}}
    {{--                </div>--}}
    {{--                <!-- /.info-box -->--}}
    {{--            </div>--}}
    {{--            <!-- /.col -->--}}
    {{--        </div>--}}

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                           @can('create', \App\Evend::class)
                                <div class="card-footer float-md-right">
                                    <a class="btn btn-danger" href="#">
                                        <i class="fa fa-shipping-fast">EoD</i>
                                    </a>
                                    <a href="{{route('evends.create')}}" class=" btn btn-success">
                                        <i class="fa fa-credit-card"> evend</i>
                                    </a>

                                </div>
                            @endcan
                            <h3 class="card-title">

                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Meter No.</th>
                                    <th>Meter Name</th>
                                    <th>Token No.</th>
                                    <th>Amount (GMD)</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($evends as $evend)
                                    <tr>
                                         <td>
                                             <a href="{{route('evends.show', $evend -> id)}}">
                                                {{$evend -> meter_num}}
                                                <div class="badge btn-outline-success">
                                                    {{$evend -> created_at -> diffFOrHumans()}}

                                                </div>
                                            </a>

                                        </td>
                                        <td>{{$evend -> meter_name}}</td>
                                        <td>{{$evend -> generated_token}}</td>
                                        <td>{{$evend -> amount}}</td>
                                         <td>
                                             <a href="#" class="btn btn-outline-success"><i class="fa fa-print"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                             <td></td>
                                         </tr>
                                </tbody>

                            </table>

                            {{$evends -> links()}}
                        </div>
                        </div>

                    </div>
                </div>
                    <!-- /.card-body -->
                </div>
                </div>
    </section>


        <!-- /.card -->
        @else
        <div class="jumbotron" style="padding-top: 20px">
            <div style="" class="alert alert-danger " role="alert">
                <h4 class="alert-heading"></h4>
                <a  href="{{route('evends.create')}}" class="btn btn-success float-md-right">
                    <i class="fa fa-credit-card">
                        e-Vedn
                    </i>
                </a>
                <p>
                    <img src="{{asset('upload/logo/logo.png')}}" width="80" height="50">
                </p>

                <hr>
                <h2 class="mb-0">
                     <br>
                    There is No Transaction Listed <strong class="badge btn-outline-success">{{today()}}</strong>, Click "e-Vending" above
                </h2>
            </div>
        </div>
        </div>

        @endif

@endsection
