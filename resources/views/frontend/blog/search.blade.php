@extends('frontend.layout.blog')

@section('title', 'Search Result')

@push('styles')
    <style>
        body {
            font-family: 'Varela Round', sans-serif;
        }

        .page-pagination-2 ul li {
            display: inline-block;
            width: 30px;
            height: 30px;
            border: 1px solid #dddddd;
            line-height: 30px;
            text-align: center;
            color: #666666;
            font-weight: 600;
            border-radius: 50%;
        }

        .page-pagination-2 ul li.active {
            background-color: #00c8fa !important;
            border-color: #00c8fa !important;
            color: #ffffff !important;
        }

    </style>
@endpush

@section('content')
    <div class="col-lg-8 col-12 mb-50">
        @if (isset($posts))
            @foreach ($posts as $post)
                <!-- Post Start -->
                <div class="post fashion-post post-default-list post-separator-border">
                    <div class="post-wrap">

                        <!-- Image -->
{{--                        <a class="image" href="{{route('post.show', $post->slug)}}"><img src="{{$post->image['float_right']}}" alt="{{str_limit($post->title, 30)}}"></a>--}}
                        <a href="{{route('post.show', $post->slug)}}" class="image">
                            @if(config('app.env')=='local')
                                <img src="{{Storage::disk('public')->url('blog/post/'.$post->category->slug.'/'.$post->image->float_right)}}" alt="{{$post->title}}">
                            @else
                                @if (isset($post->image->main))
                                    <img src="{{$post->image->main}}" alt="{{$post->title}}">
                                @endif
                            @endif
                        </a>

                        <!-- Content -->
                        <div class="content">

                            <!-- Title -->
                            <h4 class="title"><a href="{{route('post.show', $post->slug)}}">{{ucfirst($post->title)}}</a></h4>

                            <!-- Meta -->
                            <div class="meta fix">
                                <a href="#" class="meta-item author"><i class="fa fa-user"></i>{{$post->author['name']}}</a>
                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{date('d F Y', strtotime($post->created_at))}}</span>
                            </div>

                            <!-- Description -->
                            <p>{{str_limit($post->top_text, 320)}}</p>

                            <!-- Read More -->
                            <a href="{{route('post.show', $post->slug)}}" class="read-more">continue reading</a>

                        </div>

                    </div>
                </div><!-- Post End -->
            @endforeach
        @else
            <div class="row">
                <div class="col-md-12">
                    <h3 class="warning">No post found!</h3>
                </div>
            </div>
        @endif

        <div>
            {!! $posts->appends($_GET)->links("pagination::default") !!}
        </div>

    </div>

@stop


