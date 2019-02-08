<!-- Sidebar Start -->
<div class="col-lg-4 col-12 mb-50">
    <div class="row">

        <!-- Single Sidebar -->
        <div class="single-sidebar col-lg-12 col-md-6 col-12">

            <!-- Sidebar Block Wrapper -->
            <div class="sidebar-block-wrapper">

                <!-- Sidebar Block Head Start -->
                <div class="head feature-head">

                    <!-- Title -->
                    <h4 class="title">Follow Us</h4>

                </div><!-- Sidebar Block Head End -->

                <!-- Sidebar Block Body Start -->
                <div class="body">

                    <div class="sidebar-social-follow">

                        <div>
                            <a href="#" class="facebook">
                                <i class="fa fa-facebook"></i>
                                <h3>40,583</h3>
                                <span>Fans</span>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="google-plus">
                                <i class="fa fa-google-plus"></i>
                                <h3>36,857</h3>
                                <span>Followers</span>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="twitter">
                                <i class="fa fa-twitter"></i>
                                <h3>50,883</h3>
                                <span>Followers</span>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="dribbble">
                                <i class="fa fa-dribbble"></i>
                                <h3>4,743</h3>
                                <span>Followers</span>
                            </a>
                        </div>
                    </div>

                </div><!-- Sidebar Block Body End -->

            </div>

        </div>

        <!-- Single Sidebar -->
        <div class="single-sidebar col-lg-12 col-md-6 col-12">

            <!-- Sidebar Banner -->
            <a href="#" class="sidebar-banner"><img src="http://lorempixel.com/food/370/451" alt="Sidebar Banner"></a>

        </div>

        <!-- Single Sidebar -->
        <div class="single-sidebar col-lg-12 col-md-6 col-12">

            <!-- Sidebar Banner -->
            <a href="#" class="sidebar-banner"><img src="http://lorempixel.com/technics/370/272/" alt="Sidebar Banner"></a>

        </div>

        {{--Categories--}}
        <div class="single-sidebar col-lg-12 col-md-6 col-12">

            <!-- Sidebar Block Wrapper -->
            <div class="sidebar-block-wrapper">

                <!-- Sidebar Block Head Start -->
                <div class="head video-head">

                    <!-- Title -->
                    <h4 class="title">All Categories</h4>

                </div><!-- Sidebar Block Head End -->

                <!-- Sidebar Block Body Start -->
                <div class="body">

                    <ul class="sidebar-category video-category">
                        @foreach ($categories as $category)
                            @if ($category->posts->count()>0)
                                <li><a href="/posts/category/{{$category->slug}}">{{ucfirst($category->name)}} ({{$category->posts->count()}})</a></li>
                            @endif
                        @endforeach
                    </ul>

                </div><!-- Sidebar Block Body End -->

            </div>

        </div>

        <!-- Subscribe -->
        <style>
            .sidebar-subscribe::before {
                content: url({{asset('assets/Frontend/img/shape/mail-1.png')}});
            }

            .sidebar-subscribe::after {
                content: url({{asset('assets/Frontend/img/shape/mail-2.png')}});

            }
        </style>
        <div class="single-sidebar col-lg-12 col-md-6 col-12">

            <div class="sidebar-subscribe">
                <h4>Subscribe To <br>Our <span>Update</span> News</h4>
                <p>Adipiscing elit. Fusce sed mauris arcu. Praesent ut augue imperdiet, semper lorem id.</p>
                <!-- Newsletter Form -->
                <form action="{{route('subscriber.store')}}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" novalidate>
                    @csrf
                    <div id="mc_embed_signup_scroll">
                        <label for="mce-EMAIL" class="d-none">Subscribe to our mailing list</label>
                        <input type="email" name="email" class="email" id="mce-EMAIL" placeholder="Your email address" required>
                        <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">submit</button>
                    </div>
                </form>
            </div>

        </div>


        {{--Tags--}}
        <div class="single-sidebar col-lg-12 col-md-6 col-12">

            <!-- Sidebar Block Wrapper -->
            <div class="sidebar-block-wrapper">

                <!-- Sidebar Block Head Start -->
                <div class="head video-head">

                    <!-- Title -->
                    <h4 class="title">All Tags</h4>

                </div><!-- Sidebar Block Head End -->

                <!-- Sidebar Block Body Start -->
                <div class="body">
                    <style>
                        .sidebar-tag a span{
                            background-color: #00c8fa;
                        }
                    </style>
                    <ul class="sidebar-tag">
                        @foreach ($tags as $tag)
                            @if ($tag->posts->count()>0)
                                <a href="/posts/tag/{{$tag->slug}}"><span class="badge badge-secondary">{{ucfirst($tag->name)}}</span></a>
                            @endif
                        @endforeach
                    </ul>

                </div><!-- Sidebar Block Body End -->

            </div>

        </div>

    </div>
</div><!-- Sidebar End -->