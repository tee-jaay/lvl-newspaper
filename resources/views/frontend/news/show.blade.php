@extends('frontend.layout.news')
@if (isset($article->title))
    @section('title', ucfirst($article->title))
    @else
    @section('title','')
@endif


@push('css')
    <style>
        .tags{
            min-width: 70%;
        }
        .post-tags{
            display: block !important;
            padding: 10px 5px !important;
            font-size: 80% !important;
            line-height: 0 !important;
            margin: 0 !important;
            width: auto !important;
            height: auto !important;
        }
    </style>
@endpush

@section('content')
    <div class="post-header-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">

                <!-- Page Banner Start -->
                <div class="col-12">
                    <div class="post-header"
                         @if (isset($article->image->header))
                         style="background-image: url({{$article->image->header}})">
                         @else
                                 >
                         @endif


                        <!-- Title -->
                             @if (isset($article->title))
                                 <h3 class="title">{{ucfirst($article->title)}}</h3>
                                 @else
                                 <h3 class="title"></h3>
                             @endif


                        <!-- Meta -->
                        <div class="meta fix">
                            @if (isset($article->category))
                                <a href="{{route('articlesByCategory', $article->category->slug)}}" class="meta-item category fashion" style="background-color: {{$article->category['bg_color']}}">{{$article->category->name}}</a>
                            @endif
                            <a href="#" class="meta-item author"><img src="{{$article->author->profile->image}}" alt="{{$article->author->name}}">{{$article->author->name}}</a>
                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{date('d F Y', strtotime($article->created_at))}}</span>
                            <a href="#" class="meta-item comments"><i class="fa fa-comments"></i>({{$article->comments->count()}})</a>
                            <span class="meta-item view"><i class="fa fa-eye"></i>(3483)</span>
                        </div>

                    </div>
                </div><!-- Post Header Section End -->

            </div>
        </div>
    </div>

    <div class="post-section section mt-20">
        <div class="container">

            <!-- Feature Post Row Start -->
            <div class="row">

                <div class="col-lg-8 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper mb-50">

                        <!-- Post Block Body Start -->
                        <div class="body">
                            <div class="row">

                                <div class="col-12">

                                    <!-- Single Post Start -->
                                    <div class="single-post">
                                        <div class="post-wrap">

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Description -->
                                                <p class="dropcap">{{$article->dropcap}}</p>

                                                <p><img class="float-right" src="{{$article->image->right}}" alt="{{str_limit($article->title, 20)}}">
                                                    <span class="h4 italic d-block">{{$article->top_d_block}}</span></p>
                                                <img src="{{$article->image->main}}" alt="{{str_limit($article->title, 20)}}">
                                                <div class="row">
                                                    <span class="h4 italic d-block col-md-6">{{$article->bottom_d_block}}</span>
                                                    <ol class="col-md-6">
                                                        {{$article->right_list}}
                                                    </ol>
                                                </div>
                                                <blockquote class="blockquote blockquote-bg" style="background-image: url({{$article->image->bottom}})">
                                                    <p>{{$article->blockquote}}</p>
                                                </blockquote>
                                                <p>{{$article->bottom_text}}</p>

                                            </div>

                                            <style>
                                                .single-post .post-wrap .tags-social .tags i{
                                                    width: 100% !important;
                                                    height: 0px !important;
                                                    color: #999 !important;
                                                    display: inline-block !important;
                                                    line-height: 20px !important;
                                                }
                                            </style>

                                            <div class="tags-social float-left">

                                                <div class="tags float-left">
                                                    @if (isset($article->tags))
                                                        @foreach ($article->tags as $tag)
                                                            <a href="/news/tag/{{$tag->slug}}"><i class="fa fa-tags post-tags" style=""> {{ucfirst($tag->name)}}</i></a>
                                                        @endforeach
                                                    @endif
                                                </div>

                                                <div class="post-social float-right">
                                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                                                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Single Post End -->

                                </div>

                            </div>
                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                    <!-- Previous & Next Post Start -->
                    <div class="post-nav mb-50">
                        <a href="#" class="prev-post"><span>previous post</span>he 10 Best Beauty Looks: Week of September 11, 2017.</a>
                        <a href="#" class="next-post"><span>next post</span>The top 7 collections of New York fashion week.</a>
                    </div><!-- Previous & Next Post End -->

                    <!-- Post Author Start -->
                    <div class="post-author fix mb-50">

                        <div class="image float-left"><img src="img/post/post-author-1.jpg" alt="post-author"></div>

                        <div class="content fix">
                            <h5><a href="#">Alex bin do</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur is fringillas. Sed cursus mi, ut auctor tellus  Curabitur susvenenatis.</p>
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

                            <div class="two-column-post-carousel column-post-carousel post-block-carousel row slick-initialized slick-slider"><button type="button" class="slick-prev slick-arrow" style="display: block;"><i class="fa fa-angle-left"></i></button>

                                <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 2653px; transform: translate3d(-1516px, 0px, 0px);"><div class="col-md-6 col-12 slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="img/post/post-49.jpg" alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category education" tabindex="-1">music</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="-1">Upcoming Event 10 Dec at Bonobisree Area.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div><div class="col-md-6 col-12 slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="img/post/post-135.jpg" alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category fashion" tabindex="-1">fashion</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="-1">Fashion is about some thing that comes from with in you.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div><div class="col-md-6 col-12 slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="img/post/post-48.jpg" alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category gadgets" tabindex="-1">gadgets</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="-1">Apple, time to IOS With macos.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div><div class="col-md-6 col-12 slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="img/post/post-49.jpg" alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category education" tabindex="-1">music</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="-1">Upcoming Event 10 Dec at Bonobisree Area.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div><div class="col-md-6 col-12 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide02" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="img/post/post-135.jpg" alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category fashion" tabindex="0">fashion</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="0">Fashion is about some thing that comes from with in you.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div><div class="col-md-6 col-12 slick-slide slick-cloned slick-active" data-slick-index="3" aria-hidden="false" tabindex="-1" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="img/post/post-48.jpg" alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category gadgets" tabindex="0">gadgets</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="0">Apple, time to IOS With macos.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div><div class="col-md-6 col-12 slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 379px;">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="img/post/post-49.jpg" alt="post"></div>

                                                    <!-- Category -->
                                                    <a href="#" class="category education" tabindex="-1">music</a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html" tabindex="-1">Upcoming Event 10 Dec at Bonobisree Area.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div></div></div>





                                <button type="button" class="slick-next slick-arrow" style="display: block;"><i class="fa fa-angle-right"></i></button></div>

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
                                        <input type="text" id="name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
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

                @include('frontend.news.partials.sidebar')

            </div><!-- Feature Post Row End -->

        </div>
    </div>
@endsection

@push('js')

@endpush