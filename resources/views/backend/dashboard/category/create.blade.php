@extends('backend.layouts.main')

@section('title','New Category')

@push('css')
    <link rel="stylesheet" href="{{asset('assets/Backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}">
@endpush

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ADD A CATEGORY
                    </h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.blog-category.store')}}" method="post">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="name" class="form-control" name="name">
                                <label class="form-label">Category Name</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="bgcolor" class="form-control" name="bgcolor" >
                                <label class="form-label">Background Color</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <div class="switch">
                                    <label>PENDING<input type="checkbox" checked="" name="status"><span class="lever"></span>PUBLISHED</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                <label class="form-label">Description</label>
                            </div>
                        </div>

                        <br>
                        <a href="{{route('admin.blog-category.index')}}" type="button" class="btn btn-warning m-t-15 waves-effect">BACK</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SAVE</button>
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
            // Basic instantiation:
            $('#bgcolor').colorpicker();
        });
    </script>
@endpush