<div class="mega-menu">

    <!-- Menu Tab List Start -->
    <ul class="menu-tab-list nav">
        {{--<li><a class="active" data-toggle="tab" href="#menu-tab-one">all</a></li>--}}
        @if (isset($categories))
            @foreach ($categories as $category)
                @if ($category->posts->count()>3)
                    <li><a data-toggle="tab"
                           href="#category-{{$category->id}}">{{$category->name}}</a>
                    </li>
                @endif
            @endforeach
        @endif
    </ul>
    <!-- Menu Tab List End -->

    <!-- Menu Tab Content Start -->
    <div class="tab-content menu-tab-content fix">

    @foreach ($posts as $category_id => $subposts)
        <!-- Menu Tab Pane Start -->
            <div @if ($loop->first)
                 class="tab-pane fade show active"
                 @else
                 class="tab-pane fade show"
                 @endif
                 id="category-{{$category_id}}">

                <div class="row">

                @foreach ($subposts as $post)
                    @if ($loop->index < 8)
                        <!-- Post Start -->
                            <div class="post post-small col-lg-3 col-md-4 mb-30">
                                <div class="post-wrap">
                                    <a href="{{route('post.show', $post->slug)}}"
                                       class="image"><img
                                                src="{{$post->image['float_left']}}"
                                                alt="Post"></a>
                                    <div class="content">
                                        <h5 class="title"><a
                                                    href="{{route('post.show', $post->slug)}}">{{str_limit($post->title, 36)}}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div><!-- Post End -->
                        @endif
                    @endforeach


                </div>
            </div>
            <!-- Menu Tab Pane End -->
        @endforeach

    </div><!-- Menu Tab Content End -->
</div>