@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 20px">
    <div class="card">
        <div class="card-header">
            <div class="card-footer float-md-right">
                <a href="{{route('cashDeposites.create')}}" class=" btn btn-success">
                    <i class="fa fa-credit-card"> Deposite</i>
                </a>

            </div>
            <h3 style="color: #0E0EFF">
                <i class="fa fa-credit-card">
                    List of Cash Deposites
                </i>
            </h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped table-hover">
                <thead>
                <tr style="color: #0E0EFF">
                    <th>Date</th>
                    <th>Bank Code</th>
                    <th>Bank</th>
                    <th>Account Ref No.</th>
                    <th>Account No.</th>
                    <th>Deposite</th>
                </tr>
                </thead>
                <tbody>
                @foreach($depositeSlip  as $deposite)

                    <tr>

                        <td style="color: #0E9A00">{{$deposite -> created_at}}</td>
                        <td>
                            <a href="{{route('cashDeposites.show',$deposite -> id)}}">
                            {{$deposite -> bank -> code}}
                            </a>
                        </td>
                        <td>
                            <a href="{{route('cashDeposites.show', $deposite -> bank -> id)}}">
                            @switch($deposite -> bank -> code)
                                @case('ECOCGMGM')
                                <img class="img-circle elevation-2" src="{{asset('upload/bank/ecobank.jpeg')}}" width="50" height="40" alt="">
                                {{$deposite -> bank -> name}}
                                @break;
                                @case('GTBGMB')
                                <img class="img-circle elevation-2" src="{{asset('upload/bank/gtbank.png')}}" width="50" height="40" alt="">
                                {{$deposite -> bank -> name}}
                                @break;

                                @case('ACCESSGMB')
                                <img class="img-circle elevation-2" src="{{asset('upload/bank/access.png')}}" width="50" height="40" alt="">
                                {{$deposite -> bank -> name}}
                                @break;
                                @case('SCBGMB')
                                <img class="img-circle elevation-2" src="{{asset('upload/bank/standard.jpg')}}" width="50" height="40" alt="">
                                {{$deposite -> bank -> name}}
                                @break;
                                @case('FIBANKGMB')
                                    <img class="img-circle elevation-2" src="{{asset('upload/bank/fibank.png')}}" width="50" height="40" alt="">
                                    {{$deposite -> bank -> name}}
                                @break;

                        @endswitch
                            </a>
                         <td>{{$deposite -> slip_num}}</td>
                        <td>{{$deposite -> account_num}}</td>
                        <td style="color: red">{{$deposite -> amount}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            {{$depositeSlip -> links()}}
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
</div>
</div>
@endsection
