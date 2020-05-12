@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                List of Items
                            <a  href="{{route('items.create')}}" class="btn btn-success float-md-right">
                                <i class="fa fa-plus-circle">New</i>
                            </a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if(count($errors) > 0)
                                <table id="example2" class="table  table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th># of Supplier</th>
                                        <th>Items Supplied</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
{{--                                    @foreach($supplierCategory as  $category)--}}
                                        <tr>
                                            <td></td>
                                            <td> </td>
                                            <td>#</td>
                                            <td> #</td>
                                            <td>
                                                <a href="#" class="btn btn-success"><i class="fa fa-pencil-alt"></i> </a>
                                                <a class="btn btn-warning"><i class="fa fa-trash-alt"></i> </a>
                                            </td>
                                        </tr>
{{--                                    @endforeach--}}

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

