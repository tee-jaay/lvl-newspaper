<!-- Footer Top Section Start -->
<div class="footer-top-section section bg-dark">
    <div class="container-fluid">
        <div class="row">

            <!-- Footer Widget Start -->
            <div class="footer-widget col-xl-3 col-md-6 col-12 mb-60">

                <!-- Title -->
                <h4 class="widget-title">About Us</h4>

                <div class="content fix">
                    <p>{{str_limit($about->description,200)}}</p>

                    <!-- Footer Contact -->
                    <ol class="footer-contact">
                        <li><i class="fa fa-home"></i>House No {{$about->house}}, {{$about->street}}, {{$about->district}}, {{$about->country}}</li>
                        <li><i class="fa fa-envelope-open"></i>{{$about->email}}</li>
                        <li><i class="fa fa-phone"></i>{{$about->phone_one}}</li>
                        <li><i class="fa fa-mobile"></i>{{$about->phone_two}}</li>
                    </ol>

                    <!-- Footer Social -->
                    <div class="footer-social">
                        <a href="{{$about->facebook}}" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="{{$about->twitter}}" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="{{$about->dribbble}}" class="dribbble"><i class="fa fa-dribbble"></i></a>
                        <a href="{{$about->google_plus}}" class="google-plus"><i class="fa fa-google-plus"></i></a>
                    </div>

                </div>

            </div><!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="footer-widget col-xl-3 col-md-6 col-12 mb-60">

                <!-- Title -->
                <h4 class="widget-title">popular Posts</h4>

                @include('frontend.partials.footer-popular-posts')

            </div><!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="footer-widget col-xl-3 col-md-6 col-12 mb-60">

                <h4 class="widget-title">Twitter Feed</h4>

                <!-- Single Tweet Start -->
                <div class="single-tweet">

                    <!-- Image -->
                    <a href="#" class="image"><img src="{{asset('assets/Frontend/img/tweets/1.png')}}" alt="Author Image"></a>
                    <!-- Content -->
                    <div class="content fix">
                        <!-- Head -->
                        <div class="head"><h5><a href="#">Hashtech</a></h5><span>5 Minute Ago</span></div>
                        <!-- Tags -->
                        <div class="tags">
                            <a href="#">#UI</a>
                            <a href="#">#UX</a>
                            <a href="#">#Lorem</a>
                        </div>
                        <!-- Links -->
                        <div class="links"><a href="#">@https://themeforest.net/item/moto-multipurpose-landing-page-template/20342375?s_rank=1</a></div>
                        <!-- Meta -->
                        <ul class="meta">
                            <li><a href="#"><i class="fa fa-heart"></i> 865</a></li>
                            <li><a href="#"><i class="fa fa-comments"></i> 653</a></li>
                            <li><a href="#"><i class="fa fa-reply"></i></a></li>
                        </ul>
                    </div>

                </div><!-- Single Tweet End -->

                <!-- Single Tweet Start -->
                <div class="single-tweet">

                    <!-- Image -->
                    <a href="#" class="image"><img src="{{asset('assets/Frontend/img/tweets/1.png')}}" alt="Author Image"></a>
                    <!-- Content -->
                    <div class="content fix">
                        <!-- Head -->
                        <div class="head"><h5><a href="#">Hashtech</a></h5><span>5 Minute Ago</span></div>
                        <!-- Tags -->
                        <div class="tags">
                            <a href="#">#UI</a>
                            <a href="#">#UX</a>
                            <a href="#">#Lorem</a>
                        </div>
                        <!-- Links -->
                        <div class="links"><a href="#">@https://themeforest.net/item/moto-multipurpose-landing-page-template/20342375?s_rank=1</a></div>
                        <!-- Meta -->
                        <ul class="meta">
                            <li><a href="#"><i class="fa fa-heart"></i> 865</a></li>
                            <li><a href="#"><i class="fa fa-comments"></i> 653</a></li>
                            <li><a href="#"><i class="fa fa-reply"></i></a></li>
                        </ul>
                    </div>

                </div><!-- Single Tweet End -->

            </div><!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="footer-widget col-xl-3 col-md-6 col-12 mb-60">

                <!-- Title -->
                <h4 class="widget-title">Top News</h4>

                @include('frontend.partials.footer-top-news')

            </div>
            <!-- Footer Widget End -->

        </div>
    </div>
</div><!-- Footer Top Section End -->