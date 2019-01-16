@extends('frontend.layout.blog')

@push('styles')
    <style>
        body{
            font-family: 'Raleway', sans-serif;

            /*font-family: 'Source Sans Pro', sans-serif;*/
            /*font-family: 'Sarabun', sans-serif;*/
        }
        .sidebar-subscribe::before {
            content: url({{asset('assets/Frontend/img/shape/mail-1.png')}});
        }
        .sidebar-subscribe::after {
            content: url({{asset('assets/Frontend/img/shape/mail-2.png')}});

        }
    </style>
@endpush

@section('content')
    <!-- Blog Section Start -->
    <div class="blog-section section mt-20">
        <div class="container">

            <!-- Feature Post Row Start -->
            <div class="row">

                <div class="col-lg-8 col-12 mb-50">

                    <!-- Single Blog Start -->
                    <div class="single-blog mb-50">
                        <div class="blog-wrap">

                            <!-- Meta -->
                            <div class="meta fix">
                                <a href="#" class="meta-item category fashion">fashion</a>
                                <a href="#" class="meta-item author"><img src="{{asset('assets/Frontend/img/post/post-author-1.jpg')}}" alt="post author">Sathi Bhuiyan</a>
                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                            </div>

                            <!-- Title -->
                            <h3 class="title"><a href="blog-details.html">The top 7 collections of New York fashion week.</a></h3>

                            <!-- Image -->
                            <a href="blog-details.html" class="image"><img src="{{asset('assets/Frontend/img/post/post-132.jpg')}}" alt="post"></a>

                            <!-- Content -->
                            <div class="content">

                                <!-- Description -->
                                <p>There are many variations of passages of  have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators. <br>
                                    On the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>

                                <!-- Read More -->
                                <a href="blog-details.html" class="read-more">continue reading</a>

                            </div>

                        </div>
                    </div><!-- Single Blog End -->

                    <!-- Single Blog Start -->
                    <div class="single-blog mb-50">
                        <div class="blog-wrap">

                            <!-- Meta -->
                            <div class="meta fix">
                                <a href="#" class="meta-item category sports">sports</a>
                                <a href="#" class="meta-item author"><img src="{{asset('assets/Frontend/img/post/post-author-1.jpg')}}" alt="post author">Sathi Bhuiyan</a>
                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                            </div>

                            <!-- Title -->
                            <h3 class="title"><a href="blog-details.html">Breastsstroke Master become history marker.</a></h3>

                            <!-- Image -->
                            <a href="blog-details.html" class="image"><img src="{{asset('assets/Frontend/img/post/post-154.jpg')}}" alt="post"></a>

                            <!-- Content -->
                            <div class="content">

                                <!-- Description -->
                                <p>There are many variations of passages of  have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators. <br>
                                    On the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>

                                <!-- Read More -->
                                <a href="blog-details.html" class="read-more">continue reading</a>

                            </div>

                        </div>
                    </div><!-- Single Blog End -->

                    <!-- Single Blog Start -->
                    <div class="single-blog mb-50">
                        <div class="blog-wrap">

                            <!-- Meta -->
                            <div class="meta fix">
                                <a href="#" class="meta-item category gadgets">gadgets</a>
                                <a href="#" class="meta-item author"><img src="{{asset('assets/Frontend/img/post/post-author-1.jpg')}}" alt="post author">Sathi Bhuiyan</a>
                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                            </div>

                            <!-- Title -->
                            <h3 class="title"><a href="blog-details.html">Explore the new world with new technology.</a></h3>

                            <!-- Image -->
                            <a href="blog-details.html" class="image"><img src="{{asset('assets/Frontend/img/post/post-155.jpg')}}" alt="post"></a>

                            <!-- Content -->
                            <div class="content">

                                <!-- Description -->
                                <p>There are many variations of passages of  have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators. <br>
                                    On the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>

                                <!-- Read More -->
                                <a href="blog-details.html" class="read-more">continue reading</a>

                            </div>

                        </div>
                    </div><!-- Single Blog End -->

                    <div class="page-pagination-2 text-center">
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>

                </div>

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
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/Frontend/img/banner/sidebar-banner-1.jpg')}}" alt="Sidebar Banner"></a>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/Frontend/img/banner/sidebar-banner-2.jpg')}}" alt="Sidebar Banner"></a>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <div class="sidebar-subscribe">
                                <h4>Subscribe To <br>Our <span>Update</span> News</h4>
                                <p>Adipiscing elit. Fusce sed mauris arcu. Praesent ut augue imperdiet, semper lorem id.</p>
                                <!-- Newsletter Form -->
                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <label for="mce-EMAIL" class="d-none">Subscribe to our mailing list</label>
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Feature Post Row End -->

        </div>
    </div><!-- Blog Section End -->
@stop


