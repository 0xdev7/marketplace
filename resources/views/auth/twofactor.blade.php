@extends('layout.app')
@section('content')
<div class="container">
    <div class="rng_auth">
        <form method="post" action="{{ route('check_login') }}">
            <fieldset>
                <legend>Forgot Password?</legend>
                @csrf
                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Please input your email address.</small>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('login') }}" class="btn btn-primary">Back</a>
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection
