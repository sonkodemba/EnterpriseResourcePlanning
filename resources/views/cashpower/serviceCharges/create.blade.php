@extends('layouts.admin')
@section('content')

    <div class="jumbotron" style="padding-top: 10px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h1>
                                <i>
                                    <img src="{{asset('upload/Nawec/Nawec.jpeg')}}" height="50" width="70">
                                    CashPower Service Charges
                                 </i>
                            </h1>
                        </div>
                        <form class="form-horizontal" action="{{route('serviceCharges.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label style="text-align: right; color: #0E0EFF" for="Department Code" class="col-sm-2 col-form-label">From:</label>
                                    <div class="col-sm-4 input-group input-group-sm">
                                        <div class="input-group-append">
                                            <input type="number" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="from" class="form-control" id="Name" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style="text-align: right; color: #0E0EFF" for="Name" class="col-sm-2 col-form-label">To:</label>
                                    <div class="col-sm-4">
                                        <input style="background-color: lightyellow; font-size: 24px;"  type="text" name="to" class="form-control" id="Name"  >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style="text-align: right; color: #0E0EFF " for="Name" class="col-sm-2 col-form-label">Transaction Fee:</label>
                                    <div class="col-sm-4">
                                        <input  type="number" style="font-size: 24px; background-color: lightyellow; color: red; font-weight: bolder;" name="transactionFee" class="form-control" id="staffid" placeholder="100">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label style="text-align: right; color: #0E0EFF " for="Name" class="col-sm-2 col-form-label">e-SMS Receipt:</label>
                                    <div class="col-sm-4">
                                        <input  type="number" style="font-size: 24px; background-color: lightyellow; color: red; font-weight: bolder;" name="e_sms_Receipt_Fee" class="form-control" id="staffid" placeholder="100">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label style="text-align: right; color: #0E0EFF " for="Name" class="col-sm-2 col-form-label">CashPower TO BE Vended:</label>
                                    <div class="col-sm-4">
                                        <input  type="number" style="font-size: 24px; background-color: lightyellow; color: red; font-weight: bolder;" name="cashpower_To_Be_Vended" class="form-control" id="staffid" placeholder="100">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style="text-align: right; color: #0E0EFF " for="Name" class="col-sm-2 col-form-label">Descriptions:</label>
                                    <div class="col-sm-10">
                                        <textarea  type="text" style="font-size: 24px; background-color: lightyellow; color: red; font-weight: bolder;" name="descriptions" class="form-control" id="staffid" placeholder="100"></textarea>
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
                                            <i class="fa fa-credit-card"> Save</i>
                                        </button>
                                        <a href="{{route('serviceCharges.index')}}" class="btn btn-warning">
                                            <i class="fa fa-credit-card"></i>
                                            Load charges.
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
@endsection
