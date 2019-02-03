@extends('frontend.layout.blog')

@section('title','Post Details')

@push('styles')
    <style>


        .single-blog .blog-wrap .tags-social .tags i.post-tags {
            display: block !important;
            padding: 10px 5px !important;
            font-size: 80% !important;
            line-height: 0 !important;
            margin: 0 !important;
            width: auto !important;
            height: auto !important;
        }
        .linkedin{
            background-color: #0077B5 !important;
        }

        .owl-carousel-similar-posts{
            margin: 0 !important;
            padding: 0 !important;
            overflow: hidden !important;
        }
        .owl-carousel-similar-posts .owl-item{
            float: left !important;
        }

        .owl-carousel-similar-posts li {
            display: inline-block !important;
        }
        .owl-nav .disabled{
            display: none !important;
        }
        .owl-dots{
            display: none !important;
        }
        .owl-prev{
            display: none !important;
        }
        .owl-next{
            display: none !important;
        }

        .single-post{
            display: block !important;
            min-height: 279px !important;
            min-width: 319px !important;
            float: left !important;
            position: relative !important;
        }

        .single-post h4.title a {
            color: white;
        }
        .single-post h4.title a:hover {
            color: #00c8fa;
        }

        .single-post .category{
            position: absolute !important;
            left: 0 !important;
            top: 0 !important;
            z-index: 5 !important;
            font-size: 11px !important;
            /*font-family: "Open Sans", sans-serif !important;*/
            font-weight: 600 !important;
            letter-spacing: 0.8px !important;
            color: #ffffff !important;
            line-height: 24px !important;
            padding: 0 9px !important;
            text-transform: uppercase !important;
        }
        .single-post .title{
            width: 95% !important;
            padding-left: 15px !important;
            padding-top: 160px !important;
            position: absolute !important;
            z-index: 10 !important;
            left: 0 !important;
            top: 12px !important;
        }
        .single-post .time {
            margin-left: 16px !important;
            position: absolute !important;
            left: 0 !important;
            z-index: 15 !important;
            bottom: 30px !important;
        }

        .single-blog .content p{
            font-size: 18px;
        }

        .tags{
            min-width: 70%;
        }

    </style>
@endpush

@section('content')
    <div class="col-lg-8 col-12 mb-50">

        <!-- Single Blog Start -->
        <div class="single-blog mb-50">
            <div class="blog-wrap">

                <!-- Meta -->
                <div class="meta fix">
                    <a href="/posts/category/{{$post->category['slug']}}"
                       class="meta-item category " style="
                            font-size: 12px;
                            text-transform: uppercase;
                            font-weight: 600;
                            color: #ffffff;
                            letter-spacing: 1px;
                            background-color: {{$post->category['bg_color']}};
                            border-radius: 5px;
                            padding: 0 13px;
                            height: 30px;
                            line-height: 31px;
                            margin-left: 0;
                            ">{{$post->category['name']}}</a>
                    <a href="#" class="meta-item author"><img
                                src="{{asset('assets/Frontend/img/post/post-author-1.jpg')}}"
                                alt="{{$post->author['name']}}">{{$post->author['name']}}</a>
                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{date('d F Y', strtotime($post->created_at))}}</span>
                    <a href="#comments" class="meta-item comments"><i class="fa fa-comments"></i>({{$post->comments->count()}})</a>
                    <span class="meta-item view"><i class="fa fa-eye"></i>({{$post->view_count}})</span>
                </div>

                <!-- Title -->
                <h3 class="title">{{$post->title}}</h3>

                <!-- Image -->
                <div class="image">
                    @if (config('app.env')=='local')
                        <img src="
                            @if (isset($post->image->main))
                                {{Storage::disk('public')->url('blog/post/'.$post->category->slug.'/'.$post->image->main)}}
                            @endif "
                         alt="{{$post->title}}">
                    @else
                        <img src="
                            @if (isset($post->image->main))
                                {{$post->image->main}}
                            @endif "
                         alt="{{$post->title}}">
                    @endif
                </div>

                <!-- Content -->
                <div class="content">

                    <!-- Description -->
                    <p>{!! $post->top_text !!}</p>

                    <p>
                        @if (config('app.env')=='local')
                            <img class="float-left mr-3" src="
                            @if (isset($post->image->float_left))
                            {{Storage::disk('public')->url('blog/post/'.$post->category->slug.'/'.$post->image->float_left)}}
                            @endif"
                                 alt="{{$post->title}}">
                        @else
                            <img class="float-left mr-3" src="
                            @if (isset($post->image->float_left))
                                {{$post->image->float_left}}
                            @endif"
                                 alt="{{$post->title}}">
                        @endif

                        <span class="h4 italic d-block">{{$post->italic}}</span> <br>
                        {{$post->mid_text}}
                    </p>
                    <blockquote class="blockquote">
                        <p>{{$post->color_quote}}</p>
                    </blockquote>
                    <p>
                        @if (config('app.env')=='local')
                            <img class="float-right ml-2" src="
                                @if (isset($post->image->float_right))
                                    {{Storage::disk('public')->url('blog/post/'.$post->category->slug.'/'.$post->image->float_right)}}
                                @endif"
                             alt="{{$post->title}}">
                        @else
                            <img class="float-right ml-2" src="@if (isset($post->image->float_right))
                            {{$post->image->float_right}}
                            @endif"
                                 alt="{{$post->title}}">
                        @endif


                    {!! $post->bottom_text !!}</p>

                </div>

                <div class="tags-social float-left">

                    <div class="tags float-left">
                        @if (isset($post->tags))
                            @foreach ($post->tags as $tag)
                                <a href="/posts/tag/{{$tag->slug}}"><i class="fa fa-tags post-tags" style="background-color: @if(isset($post->category->bg_color)) {{$post->category->bg_color}} @endif "> {{ucfirst($tag->name)}}</i></a>
                            @endforeach
                        @endif
                    </div>

                    <div class="blog-social float-right">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{route('post.show',$post->slug)}}" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/home?status={{route('post.show',$post->slug)}}" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://plus.google.com/share?url={{route('post.show',$post->slug)}}" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{route('post.show',$post->slug)}}&title={{$post->title}}&summary={{$post->top_text}}&source=" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

            </div>
        </div><!-- Single Blog End -->

        <!-- Previous & Next Post Start -->
        <div class="post-nav mb-50">
            @if (isset($previous))
                <a href="{{ url('post/'.$previous->slug) }}" class="prev-post"><span>previous post</span>{{$previous->title}}</a>
            @else
                <a href="#" class="prev-post"><span>First post</span>No previous post</a>
            @endif
            @if (isset($next))
                <a href="{{ url('post/'.$next->slug) }}" class="next-post"><span>next post</span>{{$next->title}}</a>
            @else
                <a href="#" class="next-post"><span>Last post</span>No next post</a>
            @endif
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

        <!-- Comments Wrapper Start -->

            @include('frontend.blog.partials.comments')


    <!-- Comments Wrapper End -->

    </div>
@endsection

@push('js')

@endpush
