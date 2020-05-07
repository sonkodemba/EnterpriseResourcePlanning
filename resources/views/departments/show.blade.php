@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 2px;">
  <div class="align-content-center">

     <div class="container-fluid" style="padding-top: 2px;">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <h3>{{$department -> name}} Staff </h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Contacts</li>
                                </ol>
                            </div>
                        </div>
{{--                    </div><!-- /.container-fluid -->--}}
     <!-- Main content -->
         @if(count($department ->employee) > 0)
             @foreach($department ->employee as $dept)
                 <section class="container-fluid">

                     <!-- Default box -->
                     <div class="card card-deck">

                         <div class="card-body pb-1">
                             <div class="row d-flex align-items-stretch">
                                 <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">


                                     <div class="card bg-light">
                                         <div class="card-header text-muted border-bottom-0">
                                         </div>
                                         <div class="card-body pt-md-1">
                                             <div class="row">
                                                 <div class="col-7">
                                                     <h6 class="lead layout-boxed"><b>{{$dept-> name}}</b></h6>
                                                     <p class="text-muted text-sm"><b> {{$dept -> designation -> name}}</b> </p>


                                                     <ul class="ml-3 mb-0 fa-ul text-muted">
                                                         <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>: {{$dept ->address}}</li>
                                                         <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>: +220-{{$dept -> telephone_num}}</li>
                                                         <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>: {{$dept -> email}}</li>

                                                     </ul>

                                                 </div>
                                                 <div class="col-5 text-center">
                                                     <img  class="img-circle elevation-2" src="{{asset('upload/profile/'.$dept->image)}}" width="60" height="60" alt="">

                                                 </div>
                                             </div>
                                         </div>
                                         <div class="card-footer">
                                             <div class="text-right">
                                                 <a href="#" class="btn btn-sm btn-success">
                                                     <i class="fas fa-comments">Msg</i>
                                                 </a>

                                                 <a href="{{route('employees.show',$dept -> id)}}" class="btn btn-sm btn-primary">
                                                     <i class="fas fa-user"></i>  Profile
                                                 </a>
                                                 <a href="#" class="btn btn-sm btn-danger">
                                                     <i class="fas fa-mail-bulk">Mail</i>
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>



                 </section>        <!-- /.card-footer -->
             @endforeach
         @else
             <div class="badge badge-danger ">
                 <h6 class="col-12 col-sm-6 col-md-4 d-flex align-items-center" >Nothing to show, <a href="{{route('departments.index')}}"> Back</a></h6>

             </div>
         @endif

        </div>
    </div>
 </div>

@endsection
