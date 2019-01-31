@extends('backend.layouts.main')

@section('title','Post - '. ucfirst($post->title))

@push('css')

@endpush

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <div class="row">
                            <div class="col-md-9">
                                Title:
                                {{strtoupper($post->title)}}
                            </div>
                            <div class="col-md-3">
                                <span class="pull-right" style="top: 18%;position: absolute;right: 1%;">
                                    <a href="{{route('admin.blog-post.edit', $post->id)}}" class="btn btn-warning waves-effect"><i
                                        class="material-icons">edit</i> <span>Edit</span></a>
                                    <a href="{{route('admin.blog-post.index')}}" class="btn btn-primary waves-effect"><i
                                        class="material-icons">arrow_back</i> <span>All Posts</span></a>
                                </span>
                            </div>
                        </div>


                    </h2>
                </div>

                <div class="body">
                    <div class="row">
                        <div class="col-md-2">
                            <h5>Author:</h5>
                            <p>
                                <a href="">{{$post->author['name']}}</a>
                            </p>
                        </div>
                        <div class="col-md-2">
                            <h5>Category:</h5>
                            <p>
                                <a href="{{route('admin.blog-category.show',$post->category['id'])}}">{{ucfirst($post->category['name'])}}</a>
                            </p>
                        </div>
                        <div class="col-md-2">
                            <h5>Total Views</h5>
                            {{$post->view_count}}
                        </div>
                        <div class="col-md-2">
                            <h5>Status:</h5>
                            {{--@if ($category->status == 1)--}}
                            {{--<span class="success">Published</span>--}}
                            {{--@else--}}
                            {{--<span class="warning">Pending</span>--}}
                            {{--@endif--}}
                        </div>
                        <div class="col-md-2">
                            <h5>Tags:</h5>
                            @if (isset($post->tags))
                                @foreach ($post->tags as $tag)
                                    <a href="{{route('admin.blog-tag.show', $tag->id)}}"><i
                                                class="fa fa-tags"> {{ucfirst($tag->name)}}</i></a>
                                @endforeach
                            @endif
                        </div>
                        <div class="col-md-2">
                            <h5>Comments:</h5>
                            <p>{{$post->comments->count()}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="body">
                    <h5>Main Image:</h5>
                    <p>
                        <img src="{{$post->image->main}}" alt="" class="img-responsive">
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="body">
                    <h5>Top Text:</h5>
                    <p>
                        {{$post->top_text}}
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Left Image</h5>
                            <p>
                                <img src="{{$post->image->float_left}}" alt="" class="img-responsive">
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h5>Italic Text</h5>
                            <p>
                                <i>{{$post->italic}}</i>
                            </p>
                            <br/>
                            <br/>
                            <h5>Mid Text</h5>
                            <p>
                                {{$post->mid_text}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="body">
                    <h5>Colored Quote</h5>
                    <blockquote>{{$post->color_quote}}</blockquote>
                </div>
            </div>

            <div class="card">
                <div class="body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Bottom Text</h5>
                            <p>{{$post->bottom_text}}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Right Image</h5>
                            <p>
                                <img src="{{$post->image->float_right}}" alt="" class="img-responsive">
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

@push('js')

@endpush