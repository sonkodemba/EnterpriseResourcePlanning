@extends('layouts.admin')
@section('content')
<div class="jumbotron">
    <div class="card">
        <div class="card-header">
            <div class="card-footer float-md-right">
{{--                <a href="{{route('cashDeposites.create')}}" class=" btn btn-success">--}}
                    <i class="fa fa-credit-card"> End of Shifts</i>
                </a>

            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>No of Transactions</th>
                    <th>Amount(GMD)</th>
                    <th>VAT Charges</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Evend::all()  as $eos)
                    <tr>
                        <td>{{$eos -> created_at}}</td>
{{--                        <td>{{$deposite -> bank -> name}}</td>--}}
{{--                        <td>{{$deposite -> slip_num}}</td>--}}
{{--                        <td>{{$deposite -> account_num}}</td>--}}
{{--                        <td>{{$deposite -> amount}}</td>--}}
                    </tr>
                @endforeach
{{--                <tr>--}}
{{--                    <th> </th>--}}
{{--                    <th> </th>--}}
{{--                    <th></th>--}}
{{--                    <th></th>--}}
{{--                    <th class="badge btn-outline-success">--}}
{{--                        <h4>10000</h4>--}}
{{--                    </th>--}}
{{--                </tr>--}}
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
</div>
</div>
@endsection
