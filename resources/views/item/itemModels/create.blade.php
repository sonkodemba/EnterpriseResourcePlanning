@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 10px">
    <div class="card">
        <div class="card-header">Add New Item Model</div>
        <div class="card-body">
            <div class="tab-pane" id="settings">
                <form class="form-horizontal" action="{{route('itemmodels.store')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="name" style="background-color: lightyellow" type="text" class="form-control" id="inputName" placeholder="Item Model Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Descriptions</label>
                        <div class="col-sm-10">
                            <textarea name="descriptions" style="background-color: lightyellow" class="form-control" id="inputExperience" placeholder="Item Model Descriptions"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i>
                                Save</button>
                            <button type="submit" class="btn btn-warning">
                                <i class="fa fa-trash-alt"></i>
                                Cancel</button>
                        </div>

                        </div>
                    </div>
        </div>
    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
