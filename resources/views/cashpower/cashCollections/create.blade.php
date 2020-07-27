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
                               Add Collection
                            </i>
                        </h1>
                    </div>
                    <form class="form-horizontal" action="{{route('cashCollections.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label style="text-align: right" for="Department Code" class="col-sm-2 col-form-label">Cashier ID:</label>
                                <div class="col-sm-6">
                                    <input style="background-color: lightyellow" type="number" name="cashier" class="form-control" id="Name" placeholder="eg: Information Technology Department">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Machine ID:</label>
                                <div class="col-sm-6">
                                    <input style="background-color: lightyellow" type="number" name="machine" class="form-control" id="Name" placeholder="eg: Information Technology Department">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Shift No:</label>
                                <div class="col-sm-6">
                                    <input style="background-color: lightyellow"  type="number" name="endOfShift_num" class="form-control" id="staffid" placeholder="eg: This is the IT Department">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">End of Shift Amount:</label>
                                <div class="col-sm-6">
                                    <input style="background-color: lightyellow"  type="number" name="EndOfShiftAmount" class="form-control" id="staffid" placeholder="eg: This is the IT Department">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Actual Cash:</label>
                                <div class="col-sm-6">
                                    <input style="background-color: lightyellow"  type="number" name="ActualCashInHand" class="form-control" id="staffid" placeholder="eg: This is the IT Department">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label style="text-align: right" for="Name" class="col-sm-2 col-form-label">Descriptions:</label>
                                <div class="col-sm-8">
                                    <textarea style="background-color: lightyellow" type="text" name="descriptions" class="form-control" id="staffid" placeholder="Error In Reversal"> </textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                    <span class="badge btn-outline-danger">Caution: Verify Before the Data Before you save</span>
                                    <div class="float-md-right">
                                        <button  type="submit" class="btn btn-success">
                                            <i class="fa fa-save">Save</i>
                                        </button>
                                        <a href="{{route('cashCollections.index')}}" class="btn btn-warning">
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
