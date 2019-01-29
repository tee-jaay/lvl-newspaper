@extends('backend.layouts.main')

@section('title','Edit Tag - '. ucfirst($tag->name))

@push('css')
    <link rel="stylesheet" href="{{asset('assets/Backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}">
@endpush

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        EDIT TAG
                    </h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.blog-tag.update', $tag->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="name" class="form-control" name="name" value="{{$tag->name}}">
                                <label class="form-label">Tag Name</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <div class="switch">
                                    <label>PENDING<input type="checkbox"
                                                         @if ($tag->status == 1)
                                                         checked=""
                                                         @endif
                                                         name="status"><span class="lever"></span>PUBLISHED</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$tag->description}}</textarea>
                                <label class="form-label">Description</label>
                            </div>
                        </div>

                        <br>
                        <a href="{{route('admin.blog-tag.index')}}" type="button" class="btn btn-warning m-t-15 waves-effect">BACK</a>
                        <button type="submit" class="btn btn-secondary m-t-15 waves-effect">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="{{asset('assets/Backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
    <script>
        $(function () {
            // colorpicker:
            $('#bg-color').colorpicker();
        });
    </script>
@endpush