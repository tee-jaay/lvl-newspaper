<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Dashboard | @yield('title')</title>
<!-- Favicon-->
<link rel="icon" href="{{asset('assets/favicon.png')}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

<!-- Bootstrap Core Css -->
@if (config('app.env')=='production')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.5/css/bootstrap-select.min.css">
@else
    <link href="http://localhost:8888/public/cdn/bootstrap-3/css/bootstrap.css" rel="stylesheet">

    {{--Bootstrap Select--}}
    <link rel="stylesheet" href="{{asset('assets/Backend/plugins/bootstrap-select/css/bootstrap-select.css')}}">
@endif

<!-- Waves Effect Css -->
<link href="{{asset('assets/Backend/plugins/node-waves/waves.css')}}" rel="stylesheet" />

<!-- Animation Css -->
<link href="{{asset('assets/Backend/plugins/animate-css/animate.css')}}" rel="stylesheet" />

<!-- Custom Css -->
<link href="{{asset('assets/Backend/css/style.css')}}" rel="stylesheet">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{asset('assets/Backend/css/themes/all-themes.css')}}" rel="stylesheet" />
{{--Laravel Toastr--}}
<link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
