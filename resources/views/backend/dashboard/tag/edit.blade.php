@extends('backend.layouts.main')

@section('title','Edit Category - '. ucfirst($category->name))

@push('css')
    <link rel="stylesheet" href="{{asset('assets/Backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}">
@endpush

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        EDIT CATEGORY
                    </h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.blog-category.update', $category->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="name" class="form-control" name="name" value="{{$category->name}}">
                                <label class="form-label">Category Name</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="bg-color" class="form-control" name="bg-color" value="{{$category->bg_color}}">
                                <label class="form-label">Background Color</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <div class="switch">
                                    <label>PENDING<input type="checkbox"
                                                         @if ($category->status == 1)
                                                         checked=""
                                                         @endif
                                                         name="status"><span class="lever"></span>PUBLISHED</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$category->description}}</textarea>
                                <label class="form-label">Description</label>
                            </div>
                        </div>

                        <br>
                        <a href="{{route('admin.blog-category.index')}}" type="button" class="btn btn-warning m-t-15 waves-effect">BACK</a>
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