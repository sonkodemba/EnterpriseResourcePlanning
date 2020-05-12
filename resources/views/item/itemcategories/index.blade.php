@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <h3 class="float-md-left">Item Category</h3>
                            <a   href="{{route('itemcategories.create')}}" class="btn btn-success float-md-right">
                                <i class="fa fa-plus-circle">New</i>
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if(count($itemcategory) > 0)
                                <table id="example2" class="table  table-hover">
                                    <thead>
                                    <tr>

                                        <th>Category Code</th>
                                        <th>Category Name</th>
                                        <th># of Items</th>
                                        <th>Descriptions</th>
                                        <th>Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($itemcategory as  $category)
                                        <tr>
                                            <td>{{strtoupper($category -> code)}}</td>
                                            <td>
                                                <a href="{{route('itemcategories.show',$category -> id)}}">
                                                {{$category -> name}}
                                                </a>
                                            </td>

                                            <td>{{count($category -> item)}}</td>
                                            <td> {{$category -> descriptions}}</td>
                                            <td>
                                                <a href="{{route('itemcategories.edit',$category -> id)}}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> </a>
                                                <a class="btn btn-danger"><i class="fa fa-trash-alt"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                            @else
                                <p class="badge-warning">
                                    No Data about Item Category in the Database
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

