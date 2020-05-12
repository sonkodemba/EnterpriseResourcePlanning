@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3> Processor Specifications
                            <a  href="{{route('processors.create')}}" class="btn btn-success float-md-right">
                                <i class="fa fa-plus-circle">New</i>
                            </a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if(count($processors) > 0)
                                <table id="example2" class="table  table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Processor Name</th>
                                        <th>Size</th>
                                        <th># of Items</th>
                                        <th>Descriptions</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($processors as  $processor)
                                        <tr>
                                            <td></td>
                                            <td>
                                                <a href="{{route('processors.show',$processor -> id)}}">
                                                    {{$processor -> name}}
                                                </a>
                                            </td>

                                            <td>{{$processor -> size}}</td>
                                            <td>{{count($processor -> item)}}</td>
                                            <td> {{$processor -> descriptions}}</td>
                                            <td>
                                                <a href="{{route('processors.edit', $processor -> id)}}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> </a>
                                                <a class="btn btn-danger"><i class="fa fa-trash-alt"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                                {{$processors -> links()}}
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

