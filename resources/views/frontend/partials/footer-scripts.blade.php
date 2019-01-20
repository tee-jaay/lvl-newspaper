<!-- JS
============================================ -->
<!-- jQuery JS -->
@if (config('app.env') == 'production')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
@else
    <script src="{{asset('assets/Frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
@endif
<!-- Popper JS -->
<script src="{{asset('assets/Frontend/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/Frontend/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/Frontend/js/plugins.js')}}"></script>
<!-- rypp JS -->
<script src="{{asset('assets/Frontend/js/rypp.js')}}"></script>
<!-- Ajax Mail JS -->
<script src="{{asset('assets/Frontend/js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/Frontend/js/main.js')}}"></script>
{{--Toastr js--}}
<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}