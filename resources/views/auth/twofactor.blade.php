@extends('layout.app')
@section('content')
<div class="container">
    <div class="rng_auth">
        <form method="post" action="{{ route('check_twofactor') }}">
            <fieldset>
                <legend>Two Factor Authenticate</legend>
                @csrf
                <div class="form-group">
                    <label>Encrypted String</label>
                    <textarea rows="15" class="w-100" wrap="off" readonly>{{ $keyword }}</textarea>
                </div>
                <div class="form-group">
                    <label for="inputKeyword">Keyword</label>
                    <input type="keyword" class="form-control" id="inputKeyword" name="keyword" aria-describedby="keywordHelp" placeholder="Enter keyword">
                    <small id="keywordHelp" class="form-text text-muted">Please decrypt with your private key and input the value.</small>
                </div>
                <div class="d-flex justify-content-center mb-2">
                    @if($errors->has('message'))
                    <small class="text-danger">{{ $errors->first('message') }}</small>
                    @endif
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
