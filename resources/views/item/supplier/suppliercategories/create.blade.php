@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
        <div class="card" >
            <div class="card-header">
                <h3>New Supplier Category</h3>
            </div>
            <div class="card-body">
        <div class="tab-pane" id="settings">
            <form class="form-horizontal" action="{{route('suppliercategories.store')}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Category Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Descriptions</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="descriptions" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                </div>


                <div class="footer">
                    <div class="float-md-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i>
                            Save</button>
                        <button type="submit" class="btn btn-warning">
                            <i class="fa fa-backward"></i>
                            Back</button>
                    </div>
                </div>
            </form>
    </div>
            </div>
        </div>
    </div>
    @endsection

