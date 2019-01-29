@extends('backend.layouts.main')

@section('title','All Tags')

@push('css')
    <!-- JQuery DataTable Css -->
    <link href="{{asset('assets/Backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endpush

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ALL BLOG TAGS
                        <span class="badge bg-red">{{$tags->count()}}</span>
                        <span class="pull-right" style="top: 18%;position: absolute;right: 1%;">
                                <a href="{{route('admin.blog-tag.create')}}" class="btn btn-primary waves-effect"><i class="material-icons">add</i> <span>Add Tag</span></a>
                        </span>
                    </h2>

                </div>
                <div class="body table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
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
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('assets/Backend/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/Backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/Backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/Backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/Backend/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('assets/Backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/Backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/Backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/Backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('assets/Backend/js/pages/tables/jquery-datatable.js')}}"></script>
@endpush