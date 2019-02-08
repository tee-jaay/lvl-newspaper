<!-- Menu Section Start -->
<div class="menu-section section bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="menu-section-wrap">

                    <!-- Main Menu Start -->
                    <div class="main-menu float-left d-none d-md-block">
                        <nav>
                            <ul>

                                <li class="has-dropdown"><a href="index.html">Home</a>

                                    <!-- Submenu Start -->
                                    <ul class="sub-menu">
                                        <li><a href="{{route('home')}}">Home One</a></li>
                                        {{--<li><a href="index-2.html">Home Two</a></li>--}}
                                        {{--<li><a href="index-3.html">Home Three</a></li>--}}
                                    </ul>
                                    <!-- Submenu End -->

                                </li>
                                <li><a href="{{route('news.index')}}">News</a></li>
                                {{--<li><a href="category-sports.html">Sports</a></li>--}}

                                <li class="has-dropdown"><a href="{{route('blog')}}">Top Blog Categories</a>

                                    <!-- Mega Menu Start -->
                                    @include('frontend.blog.partials.mega-menu')
                                    <!-- Mega Menu End -->

                                </li>


                                {{--<li><a href="category-politic.html">politic</a></li>--}}
                                <li><a href="{{route('contact')}}">contact</a></li>
                                <li class="active has-dropdown"><a href="#">pages</a>

                                    <!-- Submenu Start -->
                                    <ul class="sub-menu">
                                        <li><a href="{{route('blog')}}">blog</a></li>
                                        <li><a href="{{route('contact')}}">contact</a></li>
                                    </ul><!-- Submenu End -->

                                </li>

                            </ul>
                        </nav>
                    </div><!-- Main Menu Start -->

                    <div class="mobile-logo d-none d-block d-md-none"><a href="index.html"><img
                                    src="{{asset('assets/Frontend/img/logo-white.png')}}" alt="Logo"></a></div>

                    <!-- Header Search -->
                    <div class="header-search float-right">

                        <!-- Search Toggle -->
                        <button class="header-search-toggle"><i class="fa fa-search"></i></button>

                        <!-- Header Search Form -->
                        <div class="header-search-form">
                            @if (Request::is('news*'))
                                <form action="{{route('news.search')}}" method="get">
                            @else
                                <form action="{{route('post.search')}}" method="get">
                            @endif
                                <input type="text" name="query" placeholder="Search Here">
                            </form>
                        </div>

                    </div>

                    <!-- Mobile Menu Wrap -->
                    <div class="mobile-menu-wrap d-none">
                        <nav>
                            <ul>

                                <li><a href="index.html">Home</a>

                                    <!-- Submenu Start -->
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index-2.html">Home Two</a></li>
                                        <li><a href="index-3.html">Home Three</a></li>
                                    </ul><!-- Submenu End -->

                                </li>
                                <li><a href="category-lifestyle.html">News</a></li>
                                <li><a href="category-sports.html">Sports</a></li>
                                <li><a href="category-lifestyle.html">Lifestyle</a>

                                    <!-- Submenu Start -->
                                    <ul class="sub-menu">
                                        <li><a href="category-fashion.html">Beauty</a></li>
                                        <li><a href="category-lifestyle.html">travel</a></li>
                                        <li><a href="category-sports.html">Interior Design</a></li>
                                        <li><a href="category-lifestyle.html">Photography</a></li>
                                        <li><a href="category-fashion.html">fashion</a></li>
                                        <li><a href="category-sports.html">music</a></li>
                                    </ul><!-- Submenu End -->

                                </li>
                                <li><a href="category-fashion.html">Fashion</a></li>
                                <li><a href="category-politic.html">politic</a></li>
                                <li class="active"><a href="#">pages</a>

                                    <!-- Submenu Start -->
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="contact-us.html">contact</a></li>
                                        <li><a href="post-details.html">post details</a></li>
                                    </ul><!-- Submenu End -->

                                </li>

                            </ul>
                        </nav>
                    </div>

                    <!-- Mobile Menu -->
                    <div class="mobile-menu"></div>

                </div>
            </div>
        </div>
    </div>
</div><!-- Menu Section End -->