<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hashnews | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/Frontend/img/favicon.ico')}}">

    @include('frontend.partials.head-styles')

    @stack('styles')

    @include('frontend.partials.head-scripts')
</head>

<body>

<!-- Main Wrapper -->
<div id="main-wrapper">

    @include('frontend.inc.header-top')

    @include('frontend.inc.header-section')

    @include('frontend.inc.menu-section')

    @include('frontend.inc.breaking-news-section')

    @include('frontend.inc.page-banner-section')

    <!-- Blog Section Start -->
        <div class="blog-section section mt-20">
            <div class="container">

                <!-- Feature Post Row Start -->
                <div class="row">

                {{--Content--}}
                @yield('content')
                {{--Content--}}

                @include('frontend.blog.partials.sidebar')

                </div><!-- Feature Post Row End -->

            </div>
        </div><!-- Blog Section End -->
    {{--@include('frontend.inc.instagram-section')--}}

    @include('frontend.inc.footer-top-section')

    @include('frontend.inc.footer-bottom-section')

</div>


@include('frontend.partials.footer-scripts')

@stack('js')
</body>

</html>