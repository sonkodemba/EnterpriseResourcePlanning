@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 10px">
    <!-- Main content -->
    @if(count($batch -> item) > 0)
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{$batch -> name}} / </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Item Category</th>
                                <th>Serial N0.</th>
                                <th>Allocated To:</th>
                                <th>Supplier Name</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($batch -> item as $item)
                            <tr>
                                <td>{{$item -> category -> name}}</td>
                                <td>{{$item -> serial_no}} </td>
                                <td>
                                    <img alt="" src="{{asset('upload/profile/'.$item -> employee -> id)}}">
                                    {{$item -> employee -> staff_id}}
                                </td>
                                <td>{{$item -> supplier -> name}}</td>
                                <td>{{$item -> created_at -> diffForHumans()}}</td>
                            </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
        </div>
    </section>
        @else
        <div class="footer">
            <p>There is No Data / Item Registered under <div class="badge badge-success">{{$batch -> name}} </div>
            <br>
            <a  class="btn btn-warning float-md-right" href="{{route('batches.index')}}">
                <i class="fa fa-backward">Back</i>
            </a>
            </p>
        </div>
        @endif
</div>
@endsection
