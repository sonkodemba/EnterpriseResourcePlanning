@extends('layouts.admin')
@section('content')

    <div class="jumbotron" style="padding-top: 10px">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    @can('create',\App\CashCollection::class)
                        <a   href="{{route('cashCollections.create')}}" class="btn btn-success">
                            <i class="fa fa-plus-circle">New Collection</i>
                        </a>
                    @endcan
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input style="background: lightyellow" type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-success"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap table-hover">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Cashier</th>
                            <th>Machine ID</th>
                            <th>Shift No</th>
{{--                            <th>Collector</th>--}}
                            <th>End Of Shift</th>
                            <th>Amount Collected</th>
                            <th>Error / Reversal</th>
                        </tr>
                        </thead>
                        @foreach($collectors as $collector)
                        <tbody>
                        <tr>
                                <td style="color: blue">{{$collector -> created_at}}</td>
                                <td>
                                    <a href="{{route('cashCollections.show', $collector -> id)}}">
{{--                                    <img class="img-circle elevation-2" src="{{asset('upload/profile/'.$collector ->user -> employee->image)}}" width="50" height="40" alt="">--}}
                                    {{$collector -> cashier_id}}
                                    </a>
                                </td>
                                <td>{{$collector -> machine_id}}</td>
                                <td>{{$collector -> shift_num}}</td>
                                 <td>{{$collector -> amount_collected}}</td>
                                <td style="color: blue; font-family: bold">{{$collector -> amount_to_bank}}</td>
                                <td>
                                    @switch($collector -> amount_to_reversed)
                                        @case($collector -> amount_to_reversed <= 0)
                                        <p class="badge badge-success">{{$collector -> amount_to_reversed}}</p>
                                        @break;
                                        @case($collector -> amount_to_reversed >10 && $collector ->amount_to_reversed <=20 )
                                        <p class="badge badge-info">{{$collector -> amount_to_reversed}}</p>
                                        @break;
                                        @case($collector -> amount_to_reversed > 20 && $collector ->amount_to_reversed <=30 )
                                        <p class="badge badge-dark">{{$collector -> amount_to_reversed}}</p>
                                        @break;
                                        @case($collector -> amount_to_reversed > 30 && $collector ->amount_to_reversed <=50 )
                                        <p class="badge badge-warning">{{$collector -> amount_to_reversed}}</p>
                                        @break;
                                        @case($collector -> amount_to_reversed > 50 && $collector ->amount_to_reversed <=10000 )
                                        <p class="badge badge-danger">{{$collector -> amount_to_reversed}}</p>
                                        @break;
                                    @endswitch

                                </td>


                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{\App\CashCollection::sum('amount_collected')}}</td>
                             <td style="color: blue; font-family: bold">
                              D{{\App\CashCollection::sum('amount_to_bank')}}
                             </td>
                            <td style="color: red; font-family: bold">D{{\App\CashCollection::sum('amount_to_reversed')}}</td>
                        </tr>
                        </tbody>
                    </table>
                    {{$collectors -> links()}}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    </div>
@endsection
