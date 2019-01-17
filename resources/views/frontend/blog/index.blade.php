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

                    @if (isset($posts))
                        @foreach ($posts as $post)
                            <!-- Single Blog Start -->
                            <div class="single-blog mb-50">
                                    <div class="blog-wrap">

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <a href="{{$post->category['slug']}}" class="meta-item category fashion">{{$post->category['name']}}</a>
                                            <a href="#" class="meta-item author"><img src="{{asset('assets/Frontend/img/post/post-author-1.jpg')}}" alt="post author">{{$post->author['name']}}</a>
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{date('d F Y', strtotime($post->created_at))}}</span>
                                        </div>

                                        <!-- Title -->
                                        <h3 class="title"><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h3>

                                        <!-- Image -->
                                        <a href="{{route('post.show', $post->slug)}}" class="image"><img src="{{$post->image->main}}" alt="post"></a>

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
                    @endif

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

                @include('frontend.blog.partials.sidebar')

            </div><!-- Feature Post Row End -->

        </div>
    </div><!-- Blog Section End -->
@stop


