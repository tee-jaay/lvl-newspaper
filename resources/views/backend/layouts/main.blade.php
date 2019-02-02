<!DOCTYPE html>
<html>

<head>
@include('backend.partials.head-styles')
@stack('css')
</head>

<body class="theme-indigo">
<!-- Page Loader -->
@include('backend.partials.page-loader')
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
@include('backend.inc.search-bar')
<!-- #END# Search Bar -->
<!-- Top Bar -->
@include('backend.inc.topbar')
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    @include('backend.inc.left-sidebar')
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    @include('backend.inc.right-sidebar')
    <!-- #END# Right Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">

            @yield('content')

    </div>
</section>

@include('backend.partials.footer-scripts')

@stack('js')

</body>
</html>
