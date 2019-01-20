<div class="post-block-wrapper" id="comments">
    <!-- Post Block Head Start -->
    <div class="head">
        <!-- Title -->
        <h4 class="title">All Comments</h4>
    </div><!-- Post Block Head End -->
    <div class="body">

        @if (isset($post->comments))
            @foreach ($post->comments as $comment)
                <div class="comment">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="/profile/{{str_slug($comment->user->name)}}">
                                <img src="{{$comment->user->image}}" alt="{{$comment->user->name}}">
                            </a>

                        </div>
                        <div class="col-md-10">
                            <h4><a href="/profile/{{str_slug($comment->user->name)}}">{{$comment->user->name}}</a> <small>{{$comment->created_at->diffForHumans()}}</small></h4>
                            <p>{{$comment->comment}}</p>
                        </div>
                    </div>
                    <hr/>
                </div>
                <!-- /.comment -->
            @endforeach
        @else
            <h5>Be the first commenter.</h5>
        @endif

    </div>
    <!-- /.body -->

    <!-- Post Block Head Start -->
    <div class="head">

        <!-- Title -->
        <h4 class="title">Leave a Comment</h4>

    </div><!-- Post Block Head End -->

    <!-- Post Block Body Start -->
    <div class="body">

        <div class="post-comment-form">
            <form action="#" class="row">

                <div class="col-md-6 col-12 mb-20">
                    <label for="name">Name <sup>*</sup></label>
                    <input type="text" id="name">
                </div>

                <div class="col-md-6 col-12 mb-20">
                    <label for="email">Email <sup>*</sup></label>
                    <input type="text" id="email">
                </div>

                <div class="col-12 mb-20">
                    <label for="website">Website <sup>*</sup></label>
                    <input type="text" id="website">
                </div>

                <div class="col-12 mb-20">
                    <label for="message">Message <sup>*</sup></label>
                    <textarea id="message"></textarea>
                </div>

                <div class="col-12">
                    <input type="submit" value="Submit Comment">
                </div>

            </form>
        </div>

    </div>
</div>
<!-- Post Block Body End -->