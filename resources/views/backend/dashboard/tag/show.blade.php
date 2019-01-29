@extends('backend.layouts.main')

@section('title','Tag - '. ucfirst($tag->name))

@push('css')

@endpush

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{strtoupper($tag->name)}}
                        <span class="pull-right" style="top: 18%;position: absolute;right: 1%;">
                            <a href="{{route('admin.blog-tag.edit', $tag->id)}}" class="btn btn-warning waves-effect"><i class="material-icons">edit</i> <span>Edit</span></a>
                            <a href="{{route('admin.blog-tag.index')}}" class="btn btn-primary waves-effect"><i class="material-icons">arrow_back</i> <span>Back</span></a>
                        </span>
                    </h2>
                </div>
                <div class="body">
                    <h5>Description:</h5>
                    <p>
                        {{$tag->description}}
                    </p>
                    <h5>Total Posts</h5>
                        {{$tag->posts->count()}}
                    <h5>Status:</h5>
                    @if ($tag->status == 1)
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