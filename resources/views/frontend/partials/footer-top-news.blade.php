@if (isset($top_news))
    @foreach ($top_news as $article)
        <!-- Footer Widget Post Start -->
        <div class="footer-widget-post">
            <div class="post-wrap">

                <!-- Image -->
                <a href="{{route('news.show', $article->slug)}}" class="image"><img src="{{$article->image->main}}"
                                                               alt="{{str_limit($article->title, 10)}}"></a>

                <!-- Content -->
                <div class="content">

                    <!-- Title -->
                    <h5 class="title"><a href="{{route('news.show',$article->slug)}}">{{ucfirst($article->title)}}</a>
                    </h5>

                    <!-- Meta -->
                    <div class="meta fix">
                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{date('d F Y', strtotime($article->created_at))}}</span>
                    </div>

                </div>

            </div>
        </div>
        <!-- Footer Widget Post ENd -->
    @endforeach
@endif