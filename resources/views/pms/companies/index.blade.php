@extends('layouts.admin')
@section('content')

    <div class="jumbotron" style="padding-top: 10px;">
                <!-- Content Wrapper. Contains page content -->
    <div class="content-center" style="padding-top: 1px">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
@if(count($companies) > 0)
                <div class="card">
                    <div class="card-header">
{{--                        <h3 class="card-title">ciiffwfqw</h3>--}}
                        <a  class="btn btn-success" href="{{route('companies.create')}}"><i class="fa fa-plus-circle">New</i> </a>

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
                                <th style="width: 40%">
                                    Company Name
                                </th>
                                <th style="width: 40%">
                                  No. of Projects
                                </th>
                                <th>
                                </th>
                                <th style="width: 40%">
                                    Action
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <a href="{{route('companies.show', $company -> id)}}">
                                       {{$company -> name}}
                                    </a>
                                    <br/>
{{--                                    <small class="badge-primary">--}}
{{--                                        {{$company -> created_at -> diffForHumans()}}--}}
{{--                                    </small>--}}
                                </td>
                                <td>
                                    {{count($company -> project)}}
                                </td>
                                <td>
                                </td>
                                <td>
                                    <a class="btn btn-warning">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-danger">
                                        <i class="  fa fa-trash"></i>
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

@else
            <p class="badge badge-danger">There is No Company Data.. click New Button</p><br>
                <a  class="btn btn-success" href="{{route('companies.create')}}"><i class="fa fa-plus-circle"></i> </a>


            @endif
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>
@endsection
