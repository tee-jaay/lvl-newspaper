<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{config('app.name')}} |
        @if (Request::is('login'))
            Log In
        @elseif(Request::is('register'))
            Register
        @else(Request::is('reset'))
            Reset
        @endif
        </title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets/Frontend/img/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    @if (config('app.env')=='production')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.0/css/bootstrap.min.css">
    @else
        <link href="http://localhost:8888/public/cdn/bootstrap-3/css/bootstrap.css" rel="stylesheet">
    @endif


    <!-- Waves Effect Css -->
    <link href="{{asset('assets/Backend/plugins/node-waves/waves.css')}}" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="{{asset('assets/Backend/plugins/animate-css/animate.min.css')}}" rel="stylesheet"/>

    <!-- Custom Css -->
    <link href="{{asset('assets/Backend/css/style.css')}}" rel="stylesheet">
</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="{{route('blog')}}">{{ucwords(config('app.name'))}}</a>
    </div>

    @yield('content')

</div>

@if (config('app.env') == 'production')
    <!-- Jquery Core Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.0/js/bootstrap.min.js"></script>
@else
    <!-- Jquery Core Js -->
    <script src="http://localhost:8888/public/cdn/jquery/v3.3.1/jquery-3.3.1.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="http://localhost:8888/public/cdn/bootstrap-3/js/bootstrap.js"></script>
@endif

<!-- Waves Effect Plugin Js -->
<script src="{{asset('assets/Backend/plugins/node-waves/waves.js')}}"></script>

<!-- Validation Plugin Js -->
<script src="{{asset('assets/Backend/plugins/jquery-validation/jquery.validate.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('assets/Backend/js/admin.js')}}"></script>
<script src="{{asset('assets/Backend/js/pages/sign-in.js')}}"></script>
</body>

</html>