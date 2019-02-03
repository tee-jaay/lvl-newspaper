@extends('layouts.auth')

@push('css')
@endpush

@section('content')
    <div class="card">
        <div class="body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form id="forgot_password" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div class="msg">
                    Enter your email address that you used to register. We'll send you an email with your username and a
                    link to reset your password.
                </div>
                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email"  value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SEND PASSWORD RESET LINK
                </button>

                <div class="row m-t-20 m-b--5 align-center">
                    <a href="{{route('login')}}">Sign In!</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
@endpush