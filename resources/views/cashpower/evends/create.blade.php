@extends('layouts.admin')
@section('content')

    @can('create',\App\Evend::class)
    <div class="jumbotron" style="padding-top: 10px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h1>
                                <i>
                                    <img src="{{asset('upload/Nawec/Nawec.jpeg')}}" height="50" width="70">
                                    Vend CashPower
                                 </i>
                            </h1>
                        </div>
                        <form class="form-horizontal" action="{{route('evends.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label style="text-align: right; color: #0E0EFF" for="Department Code" class="col-sm-2 col-form-label">Meter No:</label>
                                    <div class="col-sm-4 input-group input-group-sm">
                                        <div class="input-group-append">
                                            <input type="number" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="meter_num" class="form-control" id="Name" >
{{--                                            <a class="btn btn-default" type="submit" href="{{route('evends.store')}}">--}}
{{--                                                <i class="fas fa-search"></i>--}}
{{--                                            </a>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style="text-align: right; color: #0E0EFF" for="Name" class="col-sm-2 col-form-label">Name:</label>
                                    <div class="col-sm-10">
                                        <textarea style="background-color: lightyellow; font-size: 24px;"  type="text" name="meter_name" class="form-control" id="Name"  disabled ></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style="text-align: right; color: #0E0EFF " for="Name" class="col-sm-2 col-form-label">Amount:</label>
                                    <div class="col-sm-2">
                                        <input  type="number" style="font-size: 24px; background-color: lightyellow; color: red; font-weight: bolder;" name="amount" class="form-control" id="staffid" placeholder="100">
                                    </div>

                                    <div class="btn-group-sm">
                                        <label class="btn btn-outline-primary">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                            <i class="fa fa-money-bill-wave">
                                                Cash
                                            </i>
                                        </label>
                                        <label class="btn btn-outline-primary disabled">
                                            <input type="radio" name="options" id="option2" autocomplete="off">
                                            <i class="fa fa-chess-queen">Cheque</i>
                                        </label>
                                        <label class="btn btn-outline-secondary disabled">
                                            <input type="radio"  name="options" id="option3" autocomplete="off">
                                            <i class="fa fa-cash-register">POS</i>
                                        </label>
                                    </div>
                                </div>

                                <hr>
                                <div class="card-footer">
                                    <small class="badge btn-outline-danger">
                                       Verify The Amount Before eVend, Once vend, Cannot be Reversed
                                    </small>
                                    <span class="badge btn-outline-danger"></span>
                                    <div class="float-md-right">
                                        <button  type="submit" class="btn btn-success">
                                            <i class="fa fa-credit-card"> e-Vend</i>
                                        </button>
                                        <a href="{{route('evends.index')}}" class="btn btn-warning">
                                            <i class="fa fa-credit-card"></i>
                                            Load Trx.
                                        </a>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                    </div>

                </div>

            <!-- /.card -->
            </div>
        </div>
    </div>
    @endcan
@endsection
