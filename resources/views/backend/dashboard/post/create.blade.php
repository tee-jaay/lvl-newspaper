@extends('backend.layouts.main')

@section('title','New Post')

@push('css')
@endpush

@section('content')
    <form action="{{route('admin.blog-post.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row clearfix">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="card">
                    <div class="header">
                        <h2>
                            ADD A POST
                        </h2>
                    </div>
                    <div class="body">

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="title" class="form-control" name="title">
                                <label class="form-label">Post Title</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Main Image</label>
                            <small>size: 730x400</small>
                            <input type="file" name="main" id="image">
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="status" id="publish" class="filled-in" value="1">
                            <label for="publish">Publish</label>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="card">
                    <div class="header">
                        <h2>
                            CATEGORY & TAGS
                        </h2>
                    </div>

                    <div class="body">

                        <div class="form-group form-float">
                            <div class="form-line {{$errors->has('categories'?'focused error':'')}}">
                                <label for="category">Select a Category</label>
                                <select name="category" id="category" class="form-control show-tick"
                                        data-live-search="true" >
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{ucfirst($category->name)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group form-float">
                            <div class="form-line {{$errors->has('tags'?'focused error':'')}}">
                                <label for="tag">Select Tags</label>
                                <select name="tags[]" id="tag" class="form-control show-tick" data-live-search="true"
                                        multiple>
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="card">
                    <div class="header">
                        <h2>TOP TEXT</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea name="top_text" rows="4" class="form-control"
                                                  placeholder="Please type top text for blog post..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="card">
                    <div class="header">
                        <h2>LEFT IMAGE</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="form-group">
                                <small>size: 359x534</small>
                                <input type="file" name="float_left">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="card">
                    <div class="header">
                        <h2>ITALIC TEXT</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="form-group">
                                <textarea class="form-control" name="italic" id="italic" cols="30" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="card">
                    <div class="header">
                        <h2>MID TEXT</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="form-group">
                                <textarea class="form-control" name="mid_text" id="mid_text" cols="30" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="card">
                    <div class="header">
                        <h2>COLOR QUOTE</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="form-group">
                                <textarea class="form-control" name="color_quote" id="color_quote" cols="30" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="card">
                    <div class="header">
                        <h2>BOTTOM TEXT</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="form-group">
                                <textarea class="form-control" name="bottom_text" id="bottom_text" cols="30" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="card">
                    <div class="header">
                        <h2>RIGHT IMAGE</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="form-group">
                                <small>size: 351x271</small>
                                <input type="file" name="float_right" class="form-control">
                            </div>
                        </div>
                        <button class="btn btn-primary">SUBMIT</button>

                    </div>

                </div>
            </div>
        </div>



    </form>
@endsection

@push('js')
@endpush