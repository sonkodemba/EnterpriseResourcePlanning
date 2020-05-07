@extends('layouts.admin')
@section('content')

    @if(count($suppliers) > 0)
    <!-- Main content -->
    <div class="jumbotron" style="padding-top: 10px">
    <section class="content"  >
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                         <a href="{{route('suppliers.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>GPPA License</th>
                                <th>Trade License</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                           @foreach($suppliers as  $supplier)
                               <tr>
                                   <td></td>
                                   <td> {{$supplier -> name}}</td>
                                   <td>{{$supplier -> gppa_license_no}}</td>
                                   <td>{{$supplier -> trade_license_no}} </td>
                                   <td>{{$supplier -> email}}</td>
                                   <td>
                                       <a class="btn btn-success"><i class="fa fa-pencil-alt"></i> </a>
                                       <a class="btn btn-warning"><i class="fa fa-trash-alt"></i> </a>
                                   </td>
                               </tr>

                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
    </div>
    @else
        <a class="btn-success" href="{{route('suppliers.create')}}">
            <i class="fa fa-plus-circle"></i>
        </a>
        <br>
        <p class="badge badge-warning">
          There is No Data in the Record
        </p>
    @endif
    @endsection
