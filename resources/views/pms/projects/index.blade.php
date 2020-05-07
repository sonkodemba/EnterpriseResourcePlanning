@extends('layouts.admin')
@section('content')
    @if(count($projects) > 0)
    <div class="jumbotron" style="padding-top: 1px;">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-center">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->

                <div class="card">

                    <div class="card-header">
                         <a  class="btn btn-success" href="{{route('projects.create')}}"><i class="fa fa-plus-circle"></i> </a>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-avatar projects table-hover">
                            <thead>

                            <tr>
                                <th style="width: 1%">

                                </th>
                                <th style="width: 10%">
                                     Name
                                </th>
                                <th style="width: 8%">
                                    Code
                                </th>
                                <th>
                                    Company
                                </th>

                                <th style="width: 8%" class="text-center">
                                    Status

                                </th>
                                <th style="width: 20%">
                                    <a class="btn btn-success btn-sm" href="{{route('projectusers.create')}}">
                                        <i class="fas fa-user-plus">New Member
                                        </i>
                                    </a></th>
                             </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <a href="{{route('projects.show', $project -> id)}}">
                                       {{$project -> name}}
                                    </a>
                                    <br/>
                                </td>
                                <td>
                                    {{$project -> code}}
                                </td>
                                <td>
                                    {{$project -> company -> name}}
                                </td>
                                <td class="project-state">
                                    @if($project -> status -> name == 'Open')
                                        <span class="badge badge-danger">{{$project -> status -> name}}</span>
                                        @elseif($project -> status -> name == 'Close')
                                        <span class="badge badge-success">{{$project -> status -> name}}</span>
                                        @endif
                                </td>

                                <td class="project-actions text-right">

                                    <a class="btn btn-info btn-sm" href="{{route('projects.edit', $project -> id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{route('projects.destroy', $project -> id)}}">
                                        <i class="fas fa-trash">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>
    @else
        <p class="badge badge-danger">There is no Data</p><br>
        <a  class="btn btn-success" href="{{route('projects.create')}}"><i class="fa fa-plus-circle"></i> </a>

    @endif
@endsection
