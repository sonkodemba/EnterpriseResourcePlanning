@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
    <div class="alert alert-light" role="alert">
        <h4 class="alert-heading">

{{--            @foreach($cashDepositeSlip as $bankName)--}}
{{--                @if($bankName -> bank -> code == 'AGIBGMB' )--}}
             @switch($cashDepositeSlip -> bank -> name)
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
                {{$cashDepositeSlip->name}}
                @break;

            @endswitch
{{--                @endif--}}
{{--            @endforeach--}}
        </h4>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <p style="color: blue">
{{--                             @foreach($cashDepositeSlip -> getDeposites() as $deposites)--}}
{{--                                 --}}
{{--                            @endforeach--}}
                        </p>
                        <a href="{{route('cashDeposites.index')}}" class="badge btn-success float-right">
                            <i class="fa fa-baby">
                                Back
                            </i>
                        </a>
                    </div>

                    <form>
                        <br>
                        <div class="form-group row">
                            <label style="text-align: right" for="Deposite Date" class="col-sm-2 col-form-label">Date:</label>
                            <div class="col-sm-9">
                                <input value="{{$cashDepositeSlip -> created_at}}" disabled type="text" name="name" class="form-control" id="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Account No.:</label>
                            <div class="col-sm-9">
                                <input value="{{$cashDepositeSlip -> account_num}}" disabled type="text" style="background-color: lightyellow" name="name" class="form-control" id="staffid" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Name of Account Holder:</label>
                            <div class="col-sm-9">
                                <input value="{{$cashDepositeSlip -> account_holder_name}}" disabled type="text" style="background-color: lightyellow" name="name" class="form-control" id="staffid" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Currency Type:</label>
                            <div class="col-sm-9">
                                <input value="{{$cashDepositeSlip -> curency_type}}" disabled type="text" style="background-color: lightyellow" name="name" class="form-control" id="staffid" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Amount.:</label>
                            <div class="col-sm-9">
                                <input value="{{$cashDepositeSlip -> amount}}" disabled type="text" style="background-color: lightyellow" name="name" class="form-control" id="staffid" >
                            </div>
                        </div>
                    </form>
                    <div class="card-header">
                        <h3 class="card-title">COINS / MONNAIE FCY</h3>


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-bordered" >
                            <thead>
                            <tr>

                                <th>Slip No:</th>
                                <th>Depositor </th>
                                <th>A/C No</th>
                                <th>Currency Type </th>

                                <th>Amount</th>
                              </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                             </tr>
                            </tbody>

                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
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
