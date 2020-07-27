@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px">
    <!-- Content Wrapper. Contains page content -->
    <div class="align-content-center">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                         src="../../dist/img/user4-128x128.jpg"
                                         alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{$cashCollection -> user}}</h3>

                                <p class="text-muted text-center">Cashier</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Telephone No.:</b> <a class="float-right">1,322</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email:</b> <a class="float-right">cashier@premier.com</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>ID:</b> <a class="float-right" style="color: red">{{$cashCollection -> cashier_id}}</a>
                                    </li>
                                </ul>

{{--                                <a href="#" class="btn btn-primary btn-block"><b>rate</b></a>--}}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title" style="color: red">About {{$cashCollection -> cashier_id}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                <p class="text-muted">
                                    B.S. in Computer Science from the University of Tennessee at Knoxville
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                <p class="text-muted">Latrikunda Sabiji</p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                                <p class="text-muted">
                                    <span class="tag tag-danger">UI Design</span>
                                    <span class="tag tag-success">Coding</span>
                                    <span class="tag tag-info">Javascript</span>
                                    <span class="tag tag-warning">PHP</span>
                                    <span class="tag tag-primary">Node.js</span>
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                             <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <h4 style="padding-left: 10px; padding-top: 10px"> Cash Collections By {{$cashCollection -> collector_id}}</h4>
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <a class="btn btn-success float-left" href="{{route('cashCollections.index')}}">Back</a>

                                                </h3>

                                                <div class="card-tools">
                                                    <div class="input-group input-group-sm" style="width: 150px;">
                                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-success"><i class="fas fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Shift No</th>
                                                        <th>End Of Shift</th>
                                                        <th>Amount Collected</th>
                                                        <th>Error / Reversal</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($cashCollection -> getCollectionByCashier() as $collection)
                                                    <tr>
                                                        <td>{{$collection -> created_at}}</td>
                                                        <td>{{$collection -> shift_num}}</td>
                                                        <td>{{$collection -> amount_collected}}</td>
                                                        <td>{{$collection -> amount_to_bank}}</td>
                                                        <td>{{$collection -> amount_to_reversed}}</td>
                                                    </tr>
                                                    @endforeach
                                                     </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                         </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
@endsection
