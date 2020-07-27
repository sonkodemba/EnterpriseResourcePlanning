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
                                Bank
                            </i>
                        </h1>
                    </div>
                    <form class="form-horizontal" action="{{route('banks.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label style="text-align: right" for="Deposite Date" class="col-sm-2 col-form-label">Code:</label>
                                <div class="col-sm-8">
                                    <input  type="text" name="code" class="form-control" id="Name" placeholder="ECOBANK">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" style="background-color: lightyellow" name="name" class="form-control" id="staffid" placeholder="Eco Bank">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Ref No:</label>
                                <div class="col-sm-8">
                                    <input style="background-color: lightyellow" type="text" name="ref" class="form-control" id="Name" placeholder="FIX Deposite Account">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="text-align: right"  for="Name" class="col-sm-2 col-form-label">Account No.</label>
                                <div class="col-sm-8">

                                    <input type="number" style="background-color: lightyellow" name="account_num" class="form-control" id="staffid" placeholder="202-151116-110">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Descriptions:</label>
                                <div class="col-sm-8">
                                    <textarea style="background-color: lightyellow" name="descriptions" class="form-control" id="staffid" placeholder="eg: This is the IT Department"></textarea>
                                </div>
                            </div>


                                <div class="card-footer">
                                    <div class="float-md-right">
                                        <button  type="submit" class="btn btn-success">
                                            <i class="fa fa-save">Save</i>
                                        </button>
                                        <a href="#" class="btn btn-warning">
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

        <!-- /.card -->
        </div>
    </div>
    </div>
@endsection
