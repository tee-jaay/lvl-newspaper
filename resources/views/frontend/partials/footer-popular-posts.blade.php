@if (isset($popular_posts))
    @foreach ($popular_posts as $post)
        <!-- Footer Widget Post Start -->
        <div class="footer-widget-post">
            <div class="post-wrap">

                <!-- Image -->
                <a href="{{route('post.show', $post->slug)}}" class="image"><img src="{{$post->image->main}}" alt="{{str_limit($post->title, 50, '')}}"></a>

                <!-- Content -->
                <div class="content">

                    <!-- Title -->
                    <h5 class="title"><a href="{{route('post.show', $post->slug)}}">{{str_limit($post->title, 50, '')}}</a></h5>

                    <!-- Meta -->
                    <div class="meta fix">
                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{date('d F Y', strtotime($post->created_at))}}</span>
                    </div>

                </div>

            </div>
        </div><!-- Footer Widget Post ENd -->
    @endforeach
@endif