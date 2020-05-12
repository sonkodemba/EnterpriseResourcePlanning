@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            List of Employees

                            <a class="btn btn-success float-md-right" href="{{route('employees.create')}}"><i class="fa fa-plus-circle">New</i></a>


                        </h3>
                    </div>

@if(count($employees) > 0)
<div class="card-body">
    <table class="table table-hover">
        <thead>
        <tr >
            <th style="width: 10px">#</th>
            <th scope="col">SSN</th>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">Department</th>
            <th scope="col">Action

            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
        <tr>

                <td>{{$employee->staff_id}}</td>
                    <td>00125</td>
                    <td>
                       <a href="{{route('employees.show',$employee->id)}}" class="">
                           <img class="img-circle elevation-2" src="{{asset('upload/profile/'.$employee->image)}}" width="50" height="40" alt="">
                           {{$employee->name}}
                       </a>
                        <br>


                    </td>
                <td>{{$employee-> designation -> name}}</td>
                <td>{{$employee->department -> name}}</td>
                <td>
                     <a  class="btn btn-warning" href="{{ route('employees.edit',$employee->id) }}"><i class="fa fa-pencil-alt"></i></a>
                    <a  class="btn btn-danger" href="/employees/{{$employee->id}}"><i class="fa fa-trash-alt"></i></a>
                 </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$employees -> links()}}
    @else
        <div class="badge badge-danger">Employee Listed, Click on "New" to Add</div>
  @endif
</div>
    </div>
        </div>
    </div>
    </div>
    </div>
    @endsection
