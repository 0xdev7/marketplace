@extends('layout.frontend')
@section('front_content')
<div class="content my-3">
    <div class="container">
        <div class="row py-3 border-bottom border-secondary">
            <div class="order-2 order-sm-1 col-md-4 align-self-end py-1">
                <button type="button" class="btn btn-primary btn-lg btn-block">SUPPORT</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">NOTIFICATIONS</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">RAFFLE</button>
            </div>
            <div class="order-1 order-sm-2 col-md-4 align-self-end py-1 d-flex justify-content-center">
                <img src="{{ asset('assets/uploads/avatar/2.jpg') }}" class="rounded-circle border border-success" width="200" />
            </div>
            <div class="order-3 order-sm-3 col-md-4 align-self-end py-1">
                <a href="{{ route('setting') }}" class="btn btn-primary btn-lg btn-block">SETTINGS</a>
                <button type="button" class="btn btn-primary btn-lg btn-block">MESSAGES</button>
                <button type="button" class="btn btn-primary btn-lg btn-block">BUYER PANEL</button>
            </div>
        </div>
        <div class="py-5">
            <h5> Promoted Products </h5>
            <div class="row">
                <div class="col-12 col-md-2">
                    <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100 h-100" />
                </div>
                <div class="col-12 col-md-2">
                    <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100 h-100" />
                </div>
                <div class="col-12 col-md-2">
                    <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100 h-100" />
                </div>
                <div class="col-12 col-md-2">
                    <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100 h-100" />
                </div>
                <div class="col-12 col-md-2">
                    <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100 h-100" />
                </div>
                <div class="col-12 col-md-2">
                    <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100 h-100" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-2">
                <h5>
                    Bitcoin
                    <small class="text-muted"> : $50,000</small>
                </h5>
                <h5>
                    Monero
                    <small class="text-muted"> : $0.053</small>
                </h5>
            </div>
            <div class="col-12 col-md-10 border-left border-secondary">
                <div class="row">
                    <div class="col-12 col-md-3 py-1">
                        <input type="text" class="form-control" placeholder="Search with keyword">
                    </div>
                    <div class="col-12 offset-md-6 col-md-3 py-1">
                        <select class="form-control">
                            <option>Category 1</option>
                            <option>Category 2</option>
                            <option>Category 3</option>
                            <option>Category 4</option>
                            <option>Category 5</option>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12 col-md-3 py-1">
                        <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100" />
                    </div>
                    <div class="col-12 col-md-3 py-1">
                        <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100" />
                    </div>
                    <div class="col-12 col-md-3 py-1">
                        <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100" />
                    </div>
                    <div class="col-12 col-md-3 py-1">
                        <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100" />
                    </div>
                    <div class="col-12 col-md-3 py-1">
                        <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100" />
                    </div>
                    <div class="col-12 col-md-3 py-1">
                        <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100" />
                    </div>
                    <div class="col-12 col-md-3 py-1">
                        <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100" />
                    </div>
                    <div class="col-12 col-md-3 py-1">
                        <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100" />
                    </div>
                    <div class="col-12 col-md-3 py-1">
                        <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100" />
                    </div>
                    <div class="col-12 col-md-3 py-1">
                        <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100" />
                    </div>
                    <div class="col-12 col-md-3 py-1">
                        <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100" />
                    </div>
                    <div class="col-12 col-md-3 py-1">
                        <img src="{{ asset('assets/uploads/products/1.jpg') }}" class="border border-primary w-100" />
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">&laquo;</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
