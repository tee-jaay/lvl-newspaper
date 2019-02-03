<!-- Header Top Start -->
<div class="header-top section">
    <div class="container">
        <div class="row">

            <!-- Header Top Links Start -->
            <div class="header-top-links col-md-9 col-6">

                <!-- Header Links -->
                <ul class="header-links">
                    <li class="disabled block d-none d-md-block"><a href="#"><i class="fa fa-clock-o"></i> {{date('l, F d, Y', strtotime(now()))}}</a></li>
                    <li class="d-none d-md-block"><a href="#"><i class="fa fa-mixcloud"></i> <span class="weather-degrees">20 <span class="unit">c</span> </span> <span class="weather-location">- @if(isset($position->cityName)){{$position->cityName}}
                    @else
                        City not found
                    @endif </span></a></li>
                    @guest()
                        <li><a href="{{route('login')}}"><i class="fa fa-sign-in"></i>Sign In</a></li>
                        <li><a href="{{route('register')}}"><i class="fa fa-user-circle-o"></i>Sign Up</a></li>
                    @else
                        <li>
                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();" ><i class="fa fa-sign-out"></i>
                                {{ __('Sign Out') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                    <li><a href="{{route('contact')}}"><i class="fa fa-headphones"></i>Contact</a></li>
                    <li><a href="{{route('blog')}}"><i class="fa fa-th"></i>Blog</a></li>
                </ul>

            </div><!-- Header Top Links End -->

            <!-- Header Top Social Start -->
            <div class="header-top-social col-md-3 col-6">

                <!-- Header Social -->
                <div class="header-social">
                    @if (isset($socials))
                        @foreach ($socials as $social)
                            <a href="{{$social->link}}"><i class="fa {{$social->icon}}"></i></a>
                        @endforeach
                    @endif
                </div>

            </div><!-- Header Top Social End -->

        </div>
    </div>
</div><!-- Header Top End -->