@extends('layouts.auth')

@section('content')
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST" action="{{ route('login')}}">
                {{csrf_field()}}
                <div class="msg">Sign In to access the Dashboard</div>

                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="email@example.com" required
                               autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}"
                ">
                <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                <div class="form-line">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
        </div>

        <div class="row">
            <div class="col-xs-4">
                <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
            </div>
        </div>
        <div class="row m-t-15 m-b--20">
            <div class="col-xs-6">
                <a href="{{route('register')}}">Register Now!</a>
            </div>
            <div class="col-xs-6 align-right">
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        </div>
        </form>
    </div>
@endsection
