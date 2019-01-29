@extends('backend.layouts.main')

@section('title','Home')

@push('css')

@endpush

@section('content')
    <div class="block-header">
        <h3>BLOG</h3>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red hover-zoom-effect">
                <div class="icon">
                    <i class="material-icons">pages</i>
                </div>
                <div class="content">
                    <div class="text">POSTS</div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">@if (isset($posts_count)) {{$posts_count}} @else N/A @endif</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-indigo hover-zoom-effect">
                <div class="icon">
                    <i class="material-icons">category</i>
                </div>
                <div class="content">
                    <div class="text">CATEGORIES</div>
                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">@if (isset($categories_count)) {{$categories_count}} @else N/A @endif</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-purple hover-zoom-effect">
                <div class="icon">
                    <i class="material-icons">bookmark</i>
                </div>
                <div class="content">
                    <div class="text">TAGS</div>
                    <div class="number count-to" data-from="0" data-to="117" data-speed="1000" data-fresh-interval="20">@if (isset($tags_count)) {{$tags_count}} @else N/A @endif</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-deep-purple hover-zoom-effect">
                <div class="icon">
                    <i class="material-icons">comment</i>
                </div>
                <div class="content">
                    <div class="text">COMMENTS</div>
                    <div class="number count-to" data-from="0" data-to="1432" data-speed="1500" data-fresh-interval="20">@if (isset($comments_count)) {{$comments_count}} @else N/A @endif</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush