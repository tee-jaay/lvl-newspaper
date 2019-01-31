@extends('backend.layouts.main')

@section('title','Category - '. ucfirst($category->name))

@push('css')

@endpush

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{strtoupper($category->name)}}
                        <span class="pull-right" style="top: 18%;position: absolute;right: 1%;">
                            <a href="{{route('admin.blog-category.edit', $category->id)}}" class="btn btn-warning waves-effect"><i class="material-icons">edit</i> <span>Edit</span></a>
                            <a href="{{route('admin.blog-category.index')}}" class="btn btn-primary waves-effect"><i class="material-icons">arrow_back</i> <span>All Categories</span></a>
                        </span>
                    </h2>

                </div>
                <div class="body">
                    <h5>
                        Background Color:
                    </h5>
                    <span style="background-color: {{$category->bg_color}}; color: white; padding: 5px 8px;">{{$category->bg_color}}</span>
                    <h5>Description:</h5>
                    <p>
                        {{$category->description}}
                    </p>
                    <h5>Total Posts</h5>
                        {{$category->posts->count()}}
                    <h5>Status:</h5>
                    @if ($category->status == 1)
                        <span class="success">Published</span>
                    @else
                        <span class="warning">Pending</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush