@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 10px">
    <div class="card">
        <div class="card-header">
            <h3>New Batch / Consignment</h3>
        </div>
        <div class="card-body">
            <div class="tab-pane" id="settings">
                <form class="form-horizontal" action="{{route('batches.store')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"> Code</label>
                        <div class="col-sm-10">
                            <input name="code" style="background-color: lightyellow" type="text" class="form-control" id="inputName" placeholder="WB/COVID19">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Batch Name</label>
                        <div class="col-sm-10">
                            <input name="name" style="background-color: lightyellow" type="text" class="form-control" id="inputName" placeholder="Batch Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Descriptions</label>
                        <div class="col-sm-10">
                            <textarea name="descriptions" style="background-color: lightyellow" class="form-control" id="inputExperience" placeholder="Batch Descriptions"></textarea>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="footer">
                            <div class="float-md-right">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i>
                                Save</button>
                            <a  href="{{route('batches.index')}}" type="submit" class="btn btn-warning">
                                <i class="fa fa-backward"></i>
                                Back
                            </a>
                            </div>
                        </div>

                        </div>
                </form>
                    </div>
        </div>
        </div>
             </div>


@endsection
