@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
        <div class="card">
            <div class="card-header">
                <h3>Edit Item Model / Brand</h3>
            </div>
            <div class="card-body">
                <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="#" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" style="background-color: lightyellow" type="text" class="form-control" id="inputName" placeholder="Item Category Name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Descriptions</label>
                            <div class="col-sm-10">
                                <textarea name="descriptions" style="background-color: lightyellow" class="form-control" id="inputExperience" placeholder="Item Category Descriptions"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save"></i>
                                    Save</button>
                                <a type="submit" class="btn btn-warning">
                                    <i class="fa fa-trash-alt"></i>
                                    Cancel</a>
                            </div>

                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection
