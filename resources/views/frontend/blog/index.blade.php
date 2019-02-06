@extends('frontend.layout.blog')

@section('title', 'Blog')

@push('styles')
    <style>
        body {
            font-family: 'Varela Round', sans-serif;

            /*font-family: 'Raleway', sans-serif;*/

            /*font-family: 'Source Sans Pro', sans-serif;*/
            /*font-family: 'Sarabun', sans-serif;*/
        }

        .content p{
            font-size: 18px;
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
            <!-- Single Blog Start -->
                <div class="single-blog mb-50">
                    <div class="blog-wrap">

                        <!-- Meta -->
                        <div class="meta fix">
                            <a href="/posts/category/{{$post->category['slug']}}" class="meta-item category" style="
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
                        </div>

                        <!-- Title -->
                        <h3 class="title"><a href="{{route('post.show', $post->slug)}}">{{ucfirst($post->title)}}</a></h3>

                        <!-- Image -->
                        <a href="{{route('post.show', $post->slug)}}" class="image">
                            @if(config('app.env')=='local')
                                <img src="{{Storage::disk('public')->url('blog/post/'.$post->category->slug.'/'.$post->image->main)}}" alt="{{$post->title}}">
                            @else
                                @if (isset($post->image->main))
                                    <img src="{{$post->image->main}}" alt="{{$post->title}}">
                                @endif
                            @endif
                        </a>

                        <!-- Content -->
                        <div class="content">

                            <!-- Description -->
                            <p>{!! $post->top_text !!}</p>

                            <!-- Read More -->
                            <a href="{{route('post.show',$post->slug)}}" class="read-more">continue reading</a>

                        </div>

                    </div>
                </div><!-- Single Blog End -->
            @endforeach
        @else
            <h3>No post found!</h3>
        @endif
        <div>
            {!! $posts->links("pagination::default") !!}
        </div>


    </div>
@stop


