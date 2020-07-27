@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
    <div class="alert alert-light" role="alert">
        <h3 style="color: blue; padding-left: 10px; padding-top: 10px; padding-bottom: 10px" class="alert-default-light">
            <a href="{{route('banks.index')}}" class="badge btn-success float-right">
                <i class="fa fa-baby">
                    Back
                </i>
            </a>
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
                <div>
                    <img class="img-circle elevation-2" src="{{asset('upload/bank/gtbank.png')}}" width="50" height="40" alt="">
                    {{$bank->name}}
                </div>
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

        </h3>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <p style="color: blue">Account Mini Statement</p>
                    </div>
                    <div style="align-items: center">
                     <form class="card-header" style="color: blue;">
                        <br>
                        <div class="form-group row">
                            <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Date:</label>
                            <div class="col-sm-3">
                                <input disabled type="text" style="background-color: lightyellow; color: red; font-family: bold;" value="{{$bank -> created_at}}" class="form-control" id="staffid" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Account Holder:</label>
                            <div class="col-sm-3">
                                <input disabled type="text"tyle="background-color: lightyellow; color: red; font-family: bold;" value="Premier Solutions" class="form-control" id="staffid" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Account No:</label>
                            <div class="col-sm-3">
                                <input disabled type="text" style="background-color: lightyellow; color: red; font-family: bold;" value="{{$bank -> account_num}}" class="form-control" id="staffid" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Account Ref No:</label>
                            <div class="col-sm-3">
                                <input disabled type="text" style="background-color: lightyellow; color: red; font-family: bold;" value="{{$bank -> account_ref}}" class="form-control" id="staffid" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Currency Type:</label>
                            <div class="col-sm-3">
                                <input disabled type="text" style="background-color: lightyellow; color: red; font-family: bold;" value="GMD" class="form-control" id="staffid" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Opening Balance:</label>
                            <div class="col-sm-3">
                                <input disabled type="text" style="background-color: lightyellow; color: red; font-family: bold;" value="0.00" class="form-control" id="staffid" >
                            </div>
                        </div>

                    </form>
                    </div>
                    <hr>
                    <br>
                    <div class="card-header">
                        <h1 class="card-title">Transaction Statement</h1>


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-hover" >
                            <thead>
                            <tr style="color: blue; font-family: bold">
                                <th>Transaction Date</th>
                                <th>Depositor</th>
{{--                                <th>Account Ref</th>--}}
                                <th> Slip No</th>
                                <th>Amount</th>
                              </thead>
                            <tbody>
                                 <tr>
                                    <td>{{$bank -> created_at}}</td>
                                    <td>{{$bank  -> depositor_id}}</td>
                                     <td>{{$bank -> depositor_id}}</td>
                                    <td>{{$bank -> amount}}</td>
                                </tr>
                             </tbody>

                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
