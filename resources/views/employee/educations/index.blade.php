@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                 <i class="fa fa-graduation-cap">
                                     Educational Qualifications
                                 </i>
                                <a class="btn btn-success float-md-right" href="{{route('educations.create')}}"><i class="fa fa-plus-circle">New</i></a>

                            </h3>

                        </div>
                        @if(count($educations) > 0)
                            <table id="department_index_id" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Qualifications</th>
                                    <th># of Qualifications</th>
                                    <th>
                                        Action

                                    </th>

                                </tr>
                                </thead>
                                @foreach($educations as $education)
                                    <tbody>

                                    <tr>
                                        <td>{{$education -> code}}</td>
                                        <td>
                                            <a href="{{route('educations.show',$education -> id)}}">
                                                {{$education -> education}}

                                            </a>
                                        </td>
                                        <td>
                                            <div class="badge badge-success"># </div>
                                            </td>
                                        <td>
                                            <a  class="btn btn-outline-warning" href="{{ route('educations.edit',$education->id) }}"><i class="fa fa-pencil-alt"></i></a>
                                            <a  class="btn btn-outline-danger" href="#"><i class="fa fa-trash-alt"></i></a>

                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                                {{$educations -> links()}}
                    </div>
                    </div>
                </div>
                </div>
            </div>


        @else
            <p  class="badge btn-outline-danger">No Educational Qualification Exist</p>
        @endif

@endsection

