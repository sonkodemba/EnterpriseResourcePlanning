    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{asset('upload/logo/logo.png') }}"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">

            <div class="login-logo">
{{--                <p class="fa fa-lock-open">--}}
{{--                    Premier Solutions--}}
{{--                 </p>--}}
                <img src="{{asset('upload/logo/Lambda1.png')}}">
            </div>

            <small style="color: red">Please enter your credentials to login.</small>
            <form method="POST" action="{{ route('login')}}">
                    @csrf
                <div class="input-group mb-3">
                    <input  id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>
                         @error('email')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input  id="password" type="password" class="form-control " name="password" required autocomplete="off">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                        <div class="card-footer">
                            <div class="float-md-right">

                               <button type="submit" class="btn btn-success btn-block">
                                   <i class="fa fa-unlock"> Sign In </i>
                               </button>

                         </div>
{{--                            <a href="#" class="btn btn-danger">--}}
{{--                               <i class="fa fa-key">--}}
{{--                                    Forget Password--}}
{{--                               </i>--}}
{{--                            </a>--}}

                    </div>
                    <!-- /.col -->

            </form>

        </div>
        <!-- /.login-card-body -->

    </div>


<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

</div>
</body>
<span class="badge btn-outline-success">Copyright &copy; 2019-2020  All rights reserved.</span>

</html>
