@extends('layout.frontend')
@section('front_content')
<div class="content">
    <div class="container my-5">
        <h1>Vendor Panel</h1>
        <div class="d-flex">
            <div class="col-2 col-md-2">
                <ul>
                    <li>Profile</li>
                    <li>Product</li>
                </ul>
            </div>
            <div class="col-10 col-md-10">
        <div class="d-flex justify-content-between">
            <h5>Product List</h5>
            <button type="button" class="btn btn-info btn-sm">Add</button>
        </div>
        <div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Cateogry</th>
                        <th>Description</th>
                        <th>Coin</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i < 10; $i++) <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>Computer</td>
                        <td>Electronic</td>
                        <td>This is a computer for game</td>
                        <td>BTC / XMR</td>
                        <td>$5000 USD</td>
                        <td><span class="badge badge-success">Success</span>
                            <span class="badge badge-danger">Danger</span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                        </tr>
                        @endfor
                </tbody>
            </table>
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
        </div></div>
        </div>
    </div>
</div>
</div>
@endsection
