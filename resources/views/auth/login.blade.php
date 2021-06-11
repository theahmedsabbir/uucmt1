
<!doctype html>
<html lang="en">

<head>
    <title>UU CSE Management Tool</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Ahmed Sabbir">
    <meta name="author" content="Ahmed Sabbir">

    <link rel="icon" href="{{ asset('backend/img/logo/favicon.ico') }}" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/font-awesome/css/font-awesome.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/color_skins.css') }}">



    <style>
        .weather3 .top{
            position:relative;
            height:430px;
            width:100%;
            overflow:hidden;
            background:url("{{ asset('backend/img/weather_img.html') }}") no-repeat;
            background-size:cover;
            background-position:center center
        }
        .auth-main:after{
            content:'';
            position:absolute;
            right:0;
            top:0;
            width:100%;
            height:100%;
            z-index:-2;
            background:url("{{ asset('backend/images/auth_bg.jpg') }}") no-repeat left center fixed
        }
    </style>

</head>

<body class="theme-blue">
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="top">
                        <style> .login_logo{ color:white; font-size:20px; } </style>
                        <span class="login_logo">UU CSE MANAGEMENT TOOL</span>
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">Login</p>
                        </div>
                        <div class="body">

                            {{-- showing error messages --}}
                            @if (Session::has('my_error'))
                                <div class="alert alert-danger pb-0">
                                    <p>{{ Session::get('my_error') }}</p>
                                </div>
                            @endif

                            <form class="form-auth-small" action="{{ route('login') }}" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="email" class="control-label sr-only">Email</label>
                                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="Your Email" required  autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                                <div class="form-group">
                                    <label for="password" class="control-label sr-only">Password</label>
                                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" value="anypass" placeholder="Password" required autocomplete="off" onfocus="document.getElementById('password').val='';">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>




                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Remember me</span>
                                    </label>                                
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>

                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="">Register here</a></span>
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="">Forgot password?</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
    
    <!-- Javascript -->
<script src="{{ asset('backend/bundles/libscripts.bundle.js') }}"></script>    
<script src="{{ asset('backend/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('backend/bundles/mainscripts.bundle.js') }}"></script>

{{-- turning off autocomplete --}}
<script>

</script>

</body>

</html>




{{-- 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





 --}}

