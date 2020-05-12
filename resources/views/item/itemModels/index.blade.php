@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                Item Models / Brands
                                <a  href="{{route('itemmodels.create')}}" class="float-md-right btn btn-success float-md-right">
                                    <i class="fa fa-plus-circle">New</i>
                                </a>
                            </h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if(count($models) > 0)
                                <table id="example2" class="table  table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Model Name</th>
                                        <th># of Items</th>
                                        <th>Descriptions</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($models as  $model)
                                        <tr>
                                            <td></td>
                                            <td>
                                                <a href="{{route('itemmodels.show',$model -> id)}}">
                                                {{$model -> name}}
                                                </a>
                                            </td>

                                            <td>#</td>
                                            <td> {{$model -> descriptions}}</td>
                                            <td>
                                                <a href="{{route('itemmodels.edit',$model -> id)}}" class="btn btn-success"><i class="fa fa-pencil-alt"></i> </a>
                                                <a class="btn btn-warning"><i class="fa fa-trash-alt"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>

                            @else
                                <p class="badge-warning">
                                    There is No Data
                                </p>
                            @endif
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
@endsection

