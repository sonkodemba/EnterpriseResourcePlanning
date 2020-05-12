@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>List of Supplier Category
                        <a  href="{{route('suppliercategories.create')}}" class="btn btn-success float-md-right">
                            <i class="fa fa-plus-circle"></i>
                        </a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if(count($supplierCategory) > 0)
                            <table id="example2" class="table  table-hover">
                                <thead>
                                <tr>
                                    <th>Category Code</th>
                                    <th>Category Name</th>
                                    <th># of Supplier</th>
                                    <th>Items Supplied</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($supplierCategory as $key =>  $category)
                                <tr>
                                    <td>{{$category -> code}}</td>
                                    <td>
                                        <a href="{{route('suppliercategories.show',$category->id)}}">{{$category -> name}}</a>
                                    </td>
                                    <td></td>
                                    <td> #</td>
                                    <td>
                                        <a href="{{route('suppliercategories.edit',$category -> id)}}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> </a>
                                        <a class="btn btn-danger"><i class="fa fa-trash-alt"></i> </a>
                                    </td>
                                </tr>
                                @endforeach

                            </table>
{{--                            {{$supplierCategory -> links()}}--}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    </div>
    @else
        <p>
            There is No Data
        </p>
    @endif
     @endsection

