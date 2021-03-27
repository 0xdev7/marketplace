@extends('layout.app')
@section('content')
<div class="container">
    <div class="rng_auth">
        <form method="post" action="{{ route('check_login') }}">
            <fieldset>
                <legend>Login</legend>
                @csrf
                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                </div>
                <div class="d-flex justify-content-center mb-2">
                    @if($errors->has('message'))
                    <small class="text-danger">{{ $errors->first('message') }}</small>
                    @endif
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('resetpwd') }}">
                        <small id="emailHelp" class="text-muted">Forgot password?</small>
                    </a>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection
