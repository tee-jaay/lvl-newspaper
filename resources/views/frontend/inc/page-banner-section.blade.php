<!-- Page Banner Section Start -->
<div class="page-banner-section section mt-30 mb-30">
    <div class="container">
        <div class="row row-1">

            <!-- Page Banner Start -->
            <div class="col-12">
                <div class="page-banner" style="background-image: url(https://lorempixel.com/770/294/?12546)">
                    @if (Request::segment(1) == 'post')
                        <h2>Post Details</h2>
                    @else
                        <h2>{{Request::segment(1)}}</h2>
                    @endif

                    <ol class="page-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">{{Request::segment(1)}}</li>
                    </ol>
                </div>
            </div><!-- Page Banner End -->

        </div>
    </div>
</div><!-- Page Banner Section End -->