<!-- JS
============================================ -->
@if (config('app.env') == 'production')
    <!-- jQuery JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
    {{--Toastr js--}}
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
@else
    <!-- jQuery JS -->
    <script src="{{asset('assets/Frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('assets/Frontend/js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/Frontend/js/bootstrap.min.js')}}"></script>
    {{--Toastr js--}}
    <script src="{{asset('assets/Frontend/js/toastr.min.js')}}"></script>
@endif
    <!-- Plugins JS -->
    <script src="{{asset('assets/Frontend/js/plugins.js')}}"></script>
    <!-- rypp JS -->
    <script src="{{asset('assets/Frontend/js/rypp.js')}}"></script>
    <!-- Ajax Mail JS -->
    <script src="{{asset('assets/Frontend/js/ajax-mail.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/Frontend/js/main.js')}}"></script>

{!! Toastr::message() !!}