@extends('backend.layouts.main')

@section('title','All Categories')

@push('css')

@endpush

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ALL BLOG CATEGORIES
                        <small></small>
                    </h2>

                </div>
                <div class="body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>COUNT</th>
                            <th>BACKGROUND COLOR</th>
                            <th class="text-center">STATUS</th>
                            <th>CREATED AT</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if (isset($categories))
                                @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{$category->id}}</th>
                                        <td>{{ucfirst($category->name)}}</td>
                                        <td>{{$category->posts->count()}}</td>
                                        <td style="background-color: {{$category->bg_color}}; color: #ffffff;">{{$category->bg_color}}</td>
                                        <td class="text-center">
                                            @if ($category->status == 1)
                                                <span style="color: green">Published</span>
                                            @else
                                                <span style="color: orange">Pending</span>
                                            @endif
                                        </td>
                                        <td>{{$category->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.blog-category.show',$category->id)}}" class="btn btn-sm btn-success waves-effect"><i class="material-icons">visibility</i><span></span></a>
                                            <a href="{{route('admin.blog-category.edit',$category->id)}}" class="btn btn-sm btn-info waves-effect"><i class="material-icons">edit</i><span></span></a>
                                            <button onclick="deleteCategory({{$category->id}});" class="btn btn-sm btn-danger waves-effect"><i class="material-icons">delete</i><span></span></button>
                                            <form id="delete-category-{{$category->id}}" action="{{route('admin.blog-category.destroy',$category->id)}}" method="post" style="display: none;">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush