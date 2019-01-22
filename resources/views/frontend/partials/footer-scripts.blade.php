<!-- JS
============================================ -->
@if (config('app.env') == 'production')
    <!-- jQuery JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>--}}
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
    {{--Toastr js--}}
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {{--Owl--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@else
    <!-- jQuery JS -->
    <script src="{{asset('assets/Frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('assets/Frontend/js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/Frontend/js/bootstrap.min.js')}}"></script>
    {{--Toastr js--}}
    <script src="{{asset('assets/Frontend/js/toastr.min.js')}}"></script>
    {{--Owl--}}
    <script src="{{asset('assets/Frontend/js/owl/owl.carousel.js')}}"></script>
@endif
    <!-- Plugins JS -->
    <script src="{{asset('assets/Frontend/js/plugins.js')}}"></script>
    <!-- rypp JS -->
    <script src="{{asset('assets/Frontend/js/rypp.js')}}"></script>
    <!-- Ajax Mail JS -->
    <script src="{{asset('assets/Frontend/js/ajax-mail.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/Frontend/js/main.js')}}"></script>
    {{--Owl similar posts--}}
    <script>
        $(document).ready(function(){
            $(".owl-carousel-similar-posts").owlCarousel({
                items:2,
                loop:true,
                autoplay:true,
                autoplayTimeout:10000,
                autoplayHoverPause:true,
                smartSpeed:450,
            });
        });
    </script>

    {!! Toastr::message() !!}