@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 10px">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3> List of Designation / Title</h3>
                        <a class="btn btn-success" href="{{route('designations.create')}}"><i class="fa fa-plus-circle">New</i></a>

                    </div>
@if(count($designations) > 0)
 <table id="department_index_id" class="table table-hover">
    <thead>
    <tr>
        <th> </th>
        <th>Name</th>
        <th>Description</th>
        <th>
            Action

        </th>

    </tr>
    </thead>

    <tbody>
    @foreach($designations as $key =>$designation)
    <tr>
        <td></td>
        <td>
            <a href="{{route('designations.show',$designation -> id)}}">
                {{$designation -> name}}
                <div class="badge badge-success"> {{count($designation -> employee)}}</div>
            </a>
        </td>
        <td>{{$designation -> descriptions}}</td>
        <td>
            <a  class="btn btn-success" href="{{ route('designations.edit',$designation->id) }}"><i class="fa fa-pencil-alt"></i><Edit</a>
            <a  class="btn btn-danger" href="/departments/{{$designation->id}}"><i class="fa fa-trash-alt"></i></a>

        </td>
    </tr>
    </tbody>

@endforeach
</table>
{{--    {{$designations -> links()}}--}}

                </div>
            </div>
        </div>
    </div>
@else
    <p  class="badge badge-danger">No Designation Name Listed</p>
    @endif
</div>
@endsection

