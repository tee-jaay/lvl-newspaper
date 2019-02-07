@extends('frontend.layout.news')

@section('title','News - ' . ucfirst($category->name))

@push('css')

@endpush

@section('content')
    <div class="col-lg-8 col-12 mb-50">

        <!-- Post Block Wrapper Start -->
        <div class="post-block-wrapper">

            <!-- Post Block Body Start -->
            <div class="body">
                <div class="row">

                @if (isset($articles))
                    @foreach ($articles as $article)
                        <!-- Post Start -->
                            <div class="post post-overlay life-style-post post-separator-border col-md-6 col-12">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <a class="image" href="{{ route('news.show', $article->slug)}}"><img src="{{$article->image->main}}" alt="{{str_limit($article->title, 20)}}"></a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h4 class="title"><a href="{{ route('news.show', $article->slug)}}">{{ucfirst($article->title)}}</a></h4>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>{{$article->author->name}}</a>
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{date('d F Y', strtotime($article->created_at))}}</span>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- Post End -->
                        @endforeach
                    @endif

                    <style>
                        .page-link{
                            color:#999 !important;
                        }
                        .page-item.active .page-link {
                            color: #fff !important;
                            background-color: #999 !important;
                            border-color: #999 !important;
                        }
                    </style>

                    {{$articles->links()}}

                    {{--<div class="page-pagination text-center col-12">--}}
                    {{----}}
                    {{--<ul>--}}
                    {{--<li><a href="#"><i class="fa fa-angle-left"></i></a></li>--}}
                    {{--<li class="active"><a href="#">1</a></li>--}}
                    {{--<li><a href="#">2</a></li>--}}
                    {{--<li><a href="#">3</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}

                </div>
            </div><!-- Post Block Body End -->

        </div><!-- Post Block Wrapper End -->
    </div>

    @include('frontend.news.partials.sidebar')
@endsection

@push('js')

@endpush