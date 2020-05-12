@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <h3 class="float-md-left">List Batches / Consignment</h3>
                            <a   href="{{route('batches.create')}}" class="btn btn-success float-md-right">
                                <i class="fa fa-plus-circle">New</i>
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if(count($batches) > 0)
                                <table id="example2" class="table  table-hover">
                                    <thead>
                                    <tr>

                                        <th>Code</th>
                                        <th>Batch Name</th>
{{--                                        <th># of Items Per Batch</th>--}}
{{--                                        <th>Descriptions</th>--}}
                                        <th>Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($batches as  $batch)
                                        <tr>
                                            <td>{{$batch -> code}}</td>
                                            <td>
                                                <a href="{{route('batches.show',$batch -> id)}}">
                                                {{$batch -> name}}
                                                    <div class="badge badge-success">
                                                        {{count($batch -> item)}}
                                                    </div>
                                                </a>
                                            </td>

{{--                                            <td>{{count($batch -> item)}}</td>--}}
{{--                                            <td> {{$batch -> descriptions}}</td>--}}
                                            <td>
                                                <a href="{{route('batches.edit',$batch -> id)}}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> </a>
                                                <a class="btn btn-danger"><i class="fa fa-trash-alt"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                                {{$batches -> links()}}
                            @else
                                <p class="badge-warning">
                                    No Data about Item batches in the Database
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

