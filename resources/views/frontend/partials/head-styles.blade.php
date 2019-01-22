<!-- CSS
============================================ -->
@if (config('app.env') == 'production')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--Toastr css--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">
    {{--Owl Carousel--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
@else
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/Frontend/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/Frontend/css/font-awesome.min.css')}}">
    {{--Owl--}}
    <link rel="stylesheet" href="{{asset('assets/Frontend/css/owl/owl.carousel.css')}}">
@endif
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/Frontend/css/plugins.css')}}">
    <!-- rypp -->
    <link rel="stylesheet" href="{{asset('assets/Frontend/css/rypp.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/Frontend/css/style.css')}}">
    {{--Toastr--}}
    <link rel="stylesheet" href="{{asset('assets/Frontend/css/toastr.css')}}">
    {{--Google Font--}}
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

