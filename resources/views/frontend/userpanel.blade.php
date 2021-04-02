@extends('layout.frontend')
@section('front_content')
<div class="content">
    <div class="container my-5">
        <div class="d-flex justify-content-around align-items-center flex-wrap mt-5">
            <div class="col-12 col-md-6">
                <div class="card mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="250px" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                        <image width="100%" xlink:href="{{ asset('assets/frontend/images/buyer.jpg') }}"/>
                        </svg>
                    <div class="card-footer text-muted">
                        <a href="{{ route('buyerpanel') }}" class="card-link">Go to Buyer Panel</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="250px" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                        <image width="100%" xlink:href="{{ asset('assets/frontend/images/vendor.jpg') }}"/>
                        </svg>
                    <div class="card-footer text-muted">
                        @if(Auth::user()->is_vendor == 1)
                        <a href="vendorpanel" class="card-link">Go to Vendor Panel</a>
                        @else
                        <a href="#" class="card-link">Become a Vendor</a>
                        @endif
                    </div>
                </div>
            </div>
            @if(Auth::user()->is_moderator == 1)
            <div class="col-12 col-md-6">
                <div class="card mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="250px" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                        <image width="100%" xlink:href="{{ asset('assets/frontend/images/moderator.jpg') }}"/>
                        </svg>
                    <div class="card-footer text-muted">
                        <a href="#" class="card-link">Go to Moderator Panel</a>
                    </div>
                </div>
            </div>
            @endif
            @if(Auth::user()->is_admin == 1)
            <div class="col-12 col-md-6">
                <div class="card mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="250px" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                        <image width="100%" xlink:href="{{ asset('assets/frontend/images/admin.jpg') }}"/>
                        </svg>
                    <div class="card-footer text-muted">
                        <a href="#" class="card-link">Go to Admin Panel</a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
</div>
@endsection
