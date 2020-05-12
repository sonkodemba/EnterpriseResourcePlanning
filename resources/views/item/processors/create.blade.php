@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
        <div class="card">
            <div class="card-header">
                <h3>Add New Computer Processor Spec</h3>
            </div>
            <div class="card-body">
                <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="{{route('processors.store')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" style="background-color: lightyellow" type="text" class="form-control" id="inputName" placeholder="Intel Core i5 8th Gen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Size</label>
                            <div class="col-sm-10">
                                <input name="size" style="background-color: lightyellow" type="text" class="form-control" id="inputName" placeholder="Processor Size, Eg: 2.5GHZ">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Descriptions</label>
                            <div class="col-sm-10">
                                <textarea name="descriptions" style="background-color: lightyellow" class="form-control" id="inputExperience" placeholder="Describe Computer Processor eg: i5 with 2.40GHZ"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save"></i>
                                    Save</button>
                                <a href="{{route('processors.index')}}" class="btn btn-warning">
                                    <i class="fa fa-trash-alt"></i>
                                    Cancel</a>
                            </div>

                        </div>
                </div>
            </div>
            </div>
            </div>
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
