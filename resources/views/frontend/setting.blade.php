@extends('layout.frontend')
@section('front_content')
<div class="content">
    <div class="container my-3">
        <div>
            @if(session()->has('errors'))
            <div class="alertra
            t alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ session()->get('message') }}</strong>
            </div>
            @endif
            @if(session()->has('message'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ session()->get('message') }}</strong>
            </div>
            @endif
        </div>
        <div class="py-3">
            <div class="d-flex flex-wrap">
                <div class="mr-3 text-center">
                    <img src=" {{ asset('assets/uploads/avatar/2.jpg') }}" class="rounded-circle border border-success" width="200" />
                </div>
                <div class="my-3 mr-auto">
                    <legend>My Info</legend>
                    <div>
                        <label>Full Name : James Franco </label>
                    </div>
                    <div>
                        <label>Email : {{ Auth::user()->email }} </label>
                    </div>
                    <div>
                        <label>Address : Now York, Lpe Streeet 12/6 </label>
                    </div>
                    <div>
                        <label>Phonenumber : (+1) 83-293-9482 </label>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-end">
                    <a href="{{ route('home') }}" class="btn btn-primary mb-3">Back</a>
                    <button type="submit" class="btn btn-primary mb-3">Become a Vendor</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-5">
                    <form method="post" action="{{ route('update_setting') }}">
                        <fieldset>
                            <legend class="border-bottom border-secondary mb-3 pb-2" class="border-bottom border-secondary mb-3 pb-2">Perosnal Information</legend>
                            @csrf
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" id="" value="{{ old('firstname') }}" name="firstname" required="" placeholder="First Name">
                                @if($errors->has('firstname'))
                                <small class="text-danger">{{ $errors->first('firstname') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" id="" value="{{ old('lastname') }}" name="lastname" required="" placeholder="Last Name">
                                @if($errors->has('lastname'))
                                <small class="text-danger">{{ $errors->first('lastname') }}</small>
                                @endif
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">City</label>
                                <input type="text" class="form-control" id="" value="{{ old('city') }}" name="city" required="" placeholder="City">
                                @if($errors->has('city'))
                                <small class="text-danger">{{ $errors->first('city') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Address / Apt</label>
                                <input type="text" class="form-control" id="" value="{{ old('apt') }}" name="apt" required="" placeholder="Apt">
                                @if($errors->has('apt'))
                                <small class="text-danger">{{ $errors->first('apt') }}</small>
                                @endif
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Phonenumber</label>
                                <input type="text" class="form-control" id="" value="{{ old('phonenumber') }}" name="phonenumber" required="" placeholder="Phonenumber">
                                @if($errors->has('phonenumber'))
                                <small class="text-danger">{{ $errors->first('phonenumber') }}</small>
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
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-4">
                    <form method="post" action="{{ route('update_setting') }}">
                        <fieldset>
                            <legend class="border-bottom border-secondary mb-3 pb-2">Change Password</legend>
                            @csrf
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
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="mb-4">
                    <form method="post" action="{{ route('update_setting') }}">
                        <fieldset>
                            <legend class="border-bottom border-secondary mb-3 pb-2">2FA / PGP</legend>
                            @csrf
                            <input type="hidden" name="type" value="pgp" />
                            <div class="form-check mb-2">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="tfa_status" value="1" {{ Auth::user()->tfa_status == 1 ? 'checked' : '' }}>
                                    Enable Two-factor Authentication
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="textPGPKey">PGP Public Key</label>
                                <textarea class="form-control" id="textPGPKey" name="pgp_pubkey" rows="15">{{ Auth::user()->pgp_pubkey }}</textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
