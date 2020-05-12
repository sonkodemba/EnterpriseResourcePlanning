@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 10px;">



    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            List of Departments
                            <a class="btn btn-success float-md-right" href="{{route('departments.create')}}"><i class="fa fa-plus-circle">New</i></a>

                        </h3>

                    </div>
@if(count($departments) > 0)
<table id="department_index_id" class="table table-hover">
    <thead>
    <tr>
        <th></th>
        <th>Name</th>
        <th>No. of Staff</th>
        <th>Action</th>

    </tr>
    </thead>
    @foreach($departments as $department)
    <tbody>

    <tr>
        <td></td>
        <td>
            <a href="{{route('departments.show',$department -> id)}}">
                {{$department -> name}}

            </a>
        </td>
        <td><div class="badge badge-success"> {{count($department -> employee)}}</div></td>
        <td>
            <a  class="btn btn-warning" href="{{ route('departments.edit',$department->id) }}"><i class="fa fa-pencil-alt"></i></a>
            <a  class="btn btn-danger" href="/departments/{{$department->id}}"><i class="fa fa-trash-alt"></i></a>

        </td>
    </tr>
    </tbody>
@endforeach
</table>
                  </div>
            </div>
        </div>
    </div>
@else
    <p  class="badge badge-danger">No Department Name Listed</p>
    @endif
</div>
@endsection

