@extends('frontend.layout.blog')

@section('title','Post Details')

@push('styles')
@endpush

@section('content')
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
                                <a href="{{$post->category['slug']}}"
                                   class="meta-item category fashion">{{$post->category['name']}}</a>
                                <a href="#" class="meta-item author"><img
                                            src="{{asset('assets/Frontend/img/post/post-author-1.jpg')}}"
                                            alt="post author">{{$post->author['name']}}</a>
                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{date('d F Y', strtotime($post->created_at))}}</span>
                                <a href="#" class="meta-item comments"><i class="fa fa-comments"></i>(38)</a>
                                <span class="meta-item view"><i class="fa fa-eye"></i>(3483)</span>
                            </div>

                            <!-- Title -->
                            <h3 class="title">{{$post->title}}</h3>

                            <!-- Image -->
                            <div class="image"><img src="{{$post->image->main}}" alt="post"></div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Description -->
                                <p>{!! $post->top_text !!}</p>

                                <p><img class="float-left mr-3" src="{{$post->image->float_left}}" alt="post">
                                    <span class="h4 italic d-block">{{$post->italic}}</span> <br>
                                    {{$post->mid_text}}</p>
                                <blockquote class="blockquote">
                                    <p>{{$post->color_quote}}</p>
                                </blockquote>
                                <p><img class="float-right ml-2" src="{{$post->image->float_right}}"
                                        alt="post">{!! $post->bottom_text !!}</p>

                            </div>

                            <div class="tags-social float-left">

                                <div class="tags float-left">
                                    <i class="fa fa-tags"></i>
                                    <a href="#">Lifestyle,</a>
                                    <a href="#">Woman,</a>
                                    <a href="#">Cool</a>
                                </div>

                                <div class="blog-social float-right">
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                </div>

                            </div>

                        </div>
                    </div><!-- Single Blog End -->

                    <!-- Previous & Next Post Start -->
                    <div class="post-nav mb-50">
                        <a href="#" class="prev-post"><span>previous post</span>he 10 Best Beauty Looks: Week of
                            September 11, 2017.</a>
                        <a href="#" class="next-post"><span>next post</span>The top 7 collections of New York fashion
                            week.</a>
                    </div><!-- Previous & Next Post End -->

                    <!-- Post Author Start -->
                    <div class="post-author fix mb-50">

                        <div class="image float-left"><img src="{{asset('assets/Frontend/img/post/post-author-1.jpg')}}"
                                                           alt="post-author"></div>

                        <div class="content fix">
                            <h5><a href="#">Alex bin do</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur is fringillas.
                                Sed cursus mi, ut auctor tellus Curabitur susvenenatis.</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>

                    </div><!-- Post Author End -->

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper mb-50">

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">You might also like!</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="two-column-post-carousel column-post-carousel post-block-carousel row slick-initialized slick-slider">
                                <button type="button" class="slick-prev slick-arrow" style="display: block;"><i
                                            class="fa fa-angle-left"></i></button>

                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" role="listbox"
                                         style="opacity: 1; width: 2653px; transform: translate3d(-758px, 0px, 0px);">
                                        <div class="col-md-6 col-12 slick-slide slick-cloned" data-slick-index="-2"
                                             aria-hidden="true" tabindex="-1" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img
                                                                src="{{asset('assets/Frontend/img/post/post-49.jpg')}}"
                                                                alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category education" tabindex="-1">music</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="-1">Upcoming
                                                                Event 10 Dec at Bonobisree Area.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div>
                                        <div class="col-md-6 col-12 slick-slide slick-cloned" data-slick-index="-1"
                                             aria-hidden="true" tabindex="-1" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img
                                                                src="{{asset('assets/Frontend/img/post/post-135.jpg')}}"
                                                                alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category fashion" tabindex="-1">fashion</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="-1">Fashion
                                                                is about some thing that comes from with in you.</a>
                                                        </h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div>
                                        <div class="col-md-6 col-12 slick-slide slick-current slick-active"
                                             data-slick-index="0" aria-hidden="false" tabindex="-1" role="option"
                                             aria-describedby="slick-slide00" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img
                                                                src="{{asset('assets/Frontend/img/post/post-48.jpg')}}"
                                                                alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category gadgets" tabindex="0">gadgets</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="0">Apple,
                                                                time to IOS With macos.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div>
                                        <div class="col-md-6 col-12 slick-slide slick-active" data-slick-index="1"
                                             aria-hidden="false" tabindex="-1" role="option"
                                             aria-describedby="slick-slide01" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img
                                                                src="{{asset('assets/Frontend/img/post/post-49.jpg')}}"
                                                                alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category education" tabindex="0">music</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="0">Upcoming
                                                                Event 10 Dec at Bonobisree Area.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div>
                                        <div class="col-md-6 col-12 slick-slide" data-slick-index="2" aria-hidden="true"
                                             tabindex="-1" role="option" aria-describedby="slick-slide02"
                                             style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img
                                                                src="{{asset('assets/Frontend/img/post/post-135.jpg')}}"
                                                                alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category fashion" tabindex="-1">fashion</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="-1">Fashion
                                                                is about some thing that comes from with in you.</a>
                                                        </h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div>
                                        <div class="col-md-6 col-12 slick-slide slick-cloned" data-slick-index="3"
                                             aria-hidden="true" tabindex="-1" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img
                                                                src="{{asset('assets/Frontend/img/post/post-48.jpg')}}"
                                                                alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category gadgets" tabindex="-1">gadgets</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="-1">Apple,
                                                                time to IOS With macos.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div>
                                        <div class="col-md-6 col-12 slick-slide slick-cloned" data-slick-index="4"
                                             aria-hidden="true" tabindex="-1" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img
                                                                src="{{asset('assets/Frontend/img/post/post-49.jpg')}}"
                                                                alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category education" tabindex="-1">music</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="-1">Upcoming
                                                                Event 10 Dec at Bonobisree Area.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div>
                                    </div>
                                </div>


                                <button type="button" class="slick-next slick-arrow" style="display: block;"><i
                                            class="fa fa-angle-right"></i></button>
                            </div>

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">Leave a Comment</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="post-comment-form">
                                <form action="#" class="row">

                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="name">Name <sup>*</sup></label>
                                        <input type="text" id="name">
                                    </div>

                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="text" id="email">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="website">Website <sup>*</sup></label>
                                        <input type="text" id="website">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="message">Message <sup>*</sup></label>
                                        <textarea id="message"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <input type="submit" value="Submit Comment">
                                    </div>

                                </form>
                            </div>

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                @include('frontend.blog.partials.sidebar')

            </div><!-- Feature Post Row End -->

        </div>
    </div>
@endsection

@push('js')

@endpush
