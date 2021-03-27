@extends('layout.app')
@section('content')
<div class="header">
    <div class="fulid-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary d-flex justify-content-between">
            <div class="container">
                <a class="navbar-brand text-uppercase font-weight-bold" href="{{ route('home') }}">Marketplace</a>
                <a href="{{ route('logout') }}" class="btn btn-secondary my-2 my-sm-0">Logout</a>
            </div>
        </nav>
    </div>
</div>
@yield('front_content')
@endsection
