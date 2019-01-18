@extends('frontend.layout.blog')

@section('title','Post Details')

@push('styles')
@endpush

@section('content')
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

            <div class="image float-left"><img src="{{$post->author->profile['image']}}"
                                               alt="post-author"></div>

            <div class="content fix">
                <h5><a href="#">{{$post->author['name']}}</a></h5>
                <p>{{$post->author->profile['bio']}}</p>
                <div class="social">
                    <a href="{{$post->author->profile['facebook']}}" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="{{$post->author->profile['twitter']}}" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="{{$post->author->profile['google_plus']}}" target="_blank"><i class="fa fa-google-plus"></i></a>
                    <a href="{{$post->author->profile['dribbble']}}" target="_blank"><i class="fa fa-dribbble"></i></a>
                    <a href="{{$post->author->profile['pinterest']}}" target="_blank"><i class="fa fa-pinterest"></i></a>
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
            @include('frontend.blog.partials.similar-posts')

        </div><!-- Post Block Wrapper End -->

        <!-- Post Block Wrapper Start -->
        <div class="post-block-wrapper">

            <!-- Post Block Head Start -->
            <div class="head">

                <!-- Title -->
                <h4 class="title">Leave a Comment</h4>

            </div><!-- Post Block Head End -->

            <!-- Post Block Body Start -->
            @include('frontend.blog.partials.comments')

        </div><!-- Post Block Wrapper End -->

    </div>
@endsection

@push('js')

@endpush
