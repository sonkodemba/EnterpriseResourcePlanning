@extends('layouts.admin')
@section('content')
    <!-- Horizontal Form -->
    <div class="jumbotron" style="padding-top: 10px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h1>
                            <i class="fa fa-building">
                                Cash Deposite
                            </i>
                        </h1>
                    </div>
                    <form class="form-horizontal" action="{{route('cashDeposites.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label style="text-align: right" for="Deposite Date" class="col-sm-2 col-form-label">Depositor Name:</label>
                                <div class="col-sm-8">
                                    <div class="card-footer">
                                       <h5 style="color: red; font-family: bold;"> {{auth() -> user() -> name}}</h5>
                                    </div>
                                 </div>
                            </div>
                            <div class="form-group row">
                                <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Deposite Slip No:</label>
                                <div class="col-sm-8">
                                    <input type="number" style="background-color: lightyellow; color: red; font-family: bold;" name="receipt_num" class="form-control" id="staffid" placeholder="07163636710">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="text-align: right">Select Bank:</label>
                                <div class="col-sm-8">
                                    <select name="bank" class="form-control select2" style="width: 70%;">
                                        <option selected="selected">---Select Bank ---</option>
                                        @foreach($cashDeposite as $deposite)
                                            <option value="{{$deposite -> id}}">{{$deposite -> name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Account No:</label>
                                <div class="col-sm-8">
                                    <input type="number" style="background-color: lightyellow; color: red; font-family: bold;" name="account_num" class="form-control" id="staffid" placeholder="202151116110">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Amount</label>
                                <div class="col-sm-4">
                                    <input  style="background-color: lightyellow" name="amount" class="form-control" id="amount_id" placeholder="5000.00">
                                </div>
                            </div>

                                <div class="card-footer">
                                    <span class="badge btn-outline-danger"></span>
                                    <h3 class="badge btn-outline-warning">
                                        Warning: <p class="badge btn-outline-danger">Once Enter cannot be Refer back. Kindly Verify</p>
                                    </h3>
                                    <div class="float-md-right">
                                        <button  type="submit" class="btn btn-success">
                                            <i class="fa fa-save">Save</i>
                                        </button>
                                        <a href="{{route('cashDeposites.index')}}" class="btn btn-warning">
                                            <i class="fa fa-backward"></i>
                                            Back
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
{{--        @endcan--}}

        <!-- /.card -->
        </div>
    </div>
    </div>
@endsection
