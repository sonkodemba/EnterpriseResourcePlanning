@extends('layouts.admin')
@section('content')
    @if($banks -> count() > 0)

        <div class="jumbotron" style="padding-top: 10px">
            <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1">
                             <img class="img-circle elevation-2" src="{{asset('upload/bank/ecobank.jpeg')}}" width="50" height="40" alt="">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">EcoBank</span>
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
                            <img class="img-circle elevation-2" src="{{asset('upload/bank/gtbank.png')}}" width="50" height="40" alt="">

                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Guaranty Trust Bank</span>
                            <span class="info-box-number"><h3></h3></span>
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
                        <span class="info-box-icon bg-success elevation-1">
                            <img class="img-circle elevation-2" src="{{asset('upload/bank/access.png')}}" width="50" height="40" alt="">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Access Bank</span>
                            <span class="info-box-number"><h3></h3></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-gradient- elevation-1">
                            <img class="img-circle elevation-2" src="{{asset('upload/bank/standard.jpg')}}" width="50" height="40" alt="">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Standard Chartered Bank</span>
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
        <div class="card">
            <div class="card-header">
                <h1 style="color: #0E0EFF" class="card-title">
                    <i class="fa fa-building">
                       List of Banks
                    </i>
                </h1>
                <a class="btn btn-success float-md-right" href="{{route('banks.create')}}">
                    <i class="fa fa-save">
                        New
                    </i>
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr style="color: #0E0EFF">
                        <th>Code</th>
                        <th>Bank Name</th>
                        <th>Account Ref:</th>
                        <th>Account No.</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($banks as $bank)
                    <tr>

                        <td>{{$bank -> code}}</td>
                        <td>
                            <a href="{{route('banks.show', $bank -> id)}}">
                            @switch($bank -> code)
                                @case('AGIBGMB')
                                <img class="img-circle elevation-2" src="{{asset('upload/bank/agib.png')}}" width="50" height="40" alt="">
                                {{$bank->name}}
                                @break;
                                @case('ECOCGMGM')
                                     <img class="img-circle elevation-2" src="{{asset('upload/bank/ecobank.jpeg')}}" width="50" height="40" alt="">
                                    {{$bank->name}}
                             @break;

                                @case('GTBGMB')
                                <img class="img-circle elevation-2" src="{{asset('upload/bank/gtbank.png')}}" width="50" height="40" alt="">
                                {{$bank->name}}
                                @break;
                                @case('FIBANKGMB')
                                <img class="img-circle elevation-2" src="{{asset('upload/bank/fibank.png  ')}}" width="50" height="40" alt="">
                                {{$bank->name}}
                                @break;
                                @case('ACCESSGMB')
                                <img class="img-circle elevation-2" src="{{asset('upload/bank/access.png')}}" width="50" height="40" alt="">
                                {{$bank->name}}
                                @break;

                                @case('SCBGMB')
                                <img class="img-circle elevation-2" src="{{asset('upload/bank/standard.jpg')}}" width="50" height="40" alt="">
                                {{$bank->name}}
                                @break;

                            @endswitch
                            </a>
                        </td>
                        <td>{{$bank -> account_ref}}</td>
                        <td>{{$bank -> account_num}}</td>
                        <td>
                            <a href="{{route('banks.edit', $bank -> id)}}" class="btn btn-outline-warning"><i class="fa fa-pencil-alt"></i> </a>


                            <a class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i> </a>

                        </td>

                     </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$banks -> links()}}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
        </div>
    @else
        <div class="jumbotron">
            <div class="alert alert-danger" role="alert">
                <h2 class="alert-heading">
                    <img src="{{asset('upload/logo/premier-solution.jpeg')}}" height="50" width="70">
                    <a class="badge btn-success float-right" href="{{route('banks.create')}}">
                        <i class="fa fa-building">New</i>
                    </a>
                </h2>
                <hr>

                <p>There is No Data Listed for Banks  by Clicking </p>

                <p class="mb-0"></p>
            </div>
        </div>
    @endif
@endsection
