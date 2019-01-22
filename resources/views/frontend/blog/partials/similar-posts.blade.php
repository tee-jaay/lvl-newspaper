<div class="body">
    {{--<ul class="">--}}
    <ul class="owl-carousel-similar-posts">
@if (isset($randomPosts))
    @foreach ($randomPosts as $post)
                <li class="single-post">
                    <a href="/posts/category/{{$post->category['slug']}}" class="category food" style="background-color: {{$post->category['bg_color']}} !important;">{{$post->category['name']}}</a>
                    <img src="{{$post->image['float_right']}}" alt="{{str_limit($post->title, 30)}}">

                    <h4 class="title">
                        <a href="{{route('post.show', $post->slug)}}">{{str_limit($post->title, 50)}}</a>
                    </h4>
                    <div class="time">
                        <span class="meta-item date"><i class="fa fa-clock-o"></i> {{date( 'd F Y', strtotime($post->created_at) )}}</span>
                    </div>
                </li>
                <!-- /.single-post -->
    @endforeach
@endif



    </ul>
</div>
<!-- /.body -->
