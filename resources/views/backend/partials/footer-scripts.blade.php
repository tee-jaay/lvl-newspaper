@if (config('app.env') == 'production')
    <!-- Jquery Core Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.0/js/bootstrap.min.js"></script>
@else
    <!-- Jquery Core Js -->
    <script src="http://localhost:8888/public/cdn/jquery/v3.3.1/jquery-3.3.1.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="http://localhost:8888/public/cdn/bootstrap-3/js/bootstrap.js"></script>
@endif


<!-- Select Plugin Js -->
<script src="{{asset('assets/Backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('assets/Backend/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('assets/Backend/plugins/node-waves/waves.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('assets/Backend/js/admin.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('assets/Backend/js/demo.js')}}"></script>

{{--Laravel Toastr--}}
<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}