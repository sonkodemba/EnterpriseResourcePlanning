@extends('layouts.admin')
@section('content')
     <div class="card jumbotron row"style="padding-top: 10px">
        <div class="col-md-10">

            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Add Supplier</h3>
                </div>
                <div class="card-body">
                     <form action="{{route('suppliers.store')}}" method="post">
                        @csrf

                    <div class="form-group">



                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control"  placeholder="Supplier Name">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->


                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" name="code" class="form-control" placeholder="Supplier Code eg: MPTRADING">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group row">
                        <div class="col-sm-10" >
                            <select name="category_id" id="departmentId" class="selectpicker" data-style="select-with-transition" title="departmentTitle">
                                @foreach($supplierCategory as $category)
                                    <option value="{{$category -> id}}">{{$category -> name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                         <div class="form-group">

                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                 </div>
                                 <input type="text" name="gppa_license_no" class="form-control" placeholder="GPPA LIcense No:">
                             </div>
                             <!-- /.input group -->
                         </div>

                         <div class="form-group row">
{{--                             <label for="post" class="col-sm-2 col-form-label">Upload</label>--}}
                             <div class="file col-sm-10">
                                 <input type="file" name="gppa_license" class="custom-file-input" id="exampleInputFile">
                                 <label class="custom-file-label" for="exampleInputFile">Upload GPPA License </label>
                             </div>
                         </div>
                         <div class="form-group row">
                             {{--                             <label for="post" class="col-sm-2 col-form-label">Upload</label>--}}
                             <div class="file col-sm-10">
                                 <input type="file" name="trade_license" class="custom-file-input" id="exampleInputFile">
                                 <label class="custom-file-label" for="exampleInputFile">Upload Trade License </label>
                             </div>
                         </div>
                         <div class="form-group">

                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                 </div>
                                 <input type="text" name="trade_license_no" class="form-control" placeholder="Trade License No:">
                             </div>
                             <!-- /.input group -->
                         </div>
                         <!-- /.
                         <!-- /.
-- phone mask -->
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                            </div>
                            <input type="text" name="address" class="form-control" placeholder="Supplier Address">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- phone mask -->
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="number" placeholder="Telephone No: 9976650" class="form-control" name="telephone"   data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- IP mask -->
                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="Email: eg dsonko@premiersolutions.com">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                        <div class="card-footer">
                            <button  type="submit" class="btn btn-success">
                                <i class="fa fa-save">Save</i>
                            </button>
                            <a href="{{route('suppliers.index')}}" class="btn btn-warning">
                                <i class="fa fa-trash-alt"></i>
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
     </div>
@endsection
