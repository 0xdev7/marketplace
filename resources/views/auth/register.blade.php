@extends('layout.app')
@section('content')
<div class="container">
    <div class="rng_auth">
        <form method="post" action="{{ route('store') }}">
            <fieldset>
                <legend>Register</legend>
                @csrf
                <div class="form-group">
                    <label for="inputName">Username</label>
                    <input type="text" class="form-control" id="inputName" value="{{ old('name') }}" name="name" aria-describedby="nameHelp" required="" placeholder="Enter username">
                    @if($errors->has('name'))
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" value="{{ old('email') }}" name="email" aria-describedby="emailHelp" required="" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @if($errors->has('email'))
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" value="{{ old('password') }}" name="password" required="" placeholder="Password">
                    @if($errors->has('password'))
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="inputConfirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="inputConfirmPassword" value="{{ old('password_confirmation') }}" name="password_confirmation" required="" placeholder="Confirm password">
                    @if($errors->has('confirm_password'))
                    <small class="text-danger">{{ $errors->first('confirm_password') }}</small>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <label for="selectQuestion">Security Question</label>
                    <select class="form-control" id="selectQuestion" value="{{ old('question') }}" name="question">
                        <option>Name of first pet</option>
                        <option>Name of first school</option>
                        <option>Name of first hometown</option>
                        <option>Name of first employeer</option>
                        <option>Name of first best friend</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputAnswer"> Your answer </label>
                    <input type="text" class="form-control" required="" placeholder="Your answer" id="inputAnswer" value="{{ old('answer') }}" name="answer">
                    @if($errors->has('answer'))
                    <small class="text-danger">{{ $errors->first('answer') }}</small>
                    @endif
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('login') }}" class="btn btn-primary">Back</a>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection
