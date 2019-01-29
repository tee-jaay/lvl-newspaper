@extends('backend.layouts.main')

@section('title','All Tags')

@push('css')

@endpush

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ALL BLOG TAGS
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
                            <th class="text-center">STATUS</th>
                            <th>CREATED AT</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (isset($tags))
                            @foreach ($tags as $tag)
                                <tr>
                                    <th scope="row">{{$tag->id}}</th>
                                    <td>{{ucfirst($tag->name)}}</td>
                                    <td>{{$tag->posts->count()}}</td>
                                    <td class="text-center">
                                        @if ($tag->status == 1)
                                            <span style="color: green">Published</span>
                                        @else
                                            <span style="color: orange">Pending</span>
                                        @endif
                                    </td>
                                    <td>{{$tag->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.blog-tag.show',$tag->id)}}"
                                           class="btn btn-sm btn-success waves-effect"><i class="material-icons">visibility</i><span></span></a>
                                        <a href="{{route('admin.blog-tag.edit',$tag->id)}}"
                                           class="btn btn-sm btn-warning waves-effect"><i
                                                    class="material-icons">edit</i><span></span></a>
                                        <button onclick="deletetag({{$tag->id}});"
                                                class="btn btn-sm btn-danger waves-effect"><i class="material-icons">delete</i><span></span>
                                        </button>
                                        <form id="delete-tag-{{$tag->id}}"
                                              action="{{route('admin.blog-tag.destroy',$tag->id)}}" method="post"
                                              style="display: none;">
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