@extends('admin.master')
@section('content')
<div class="container">
    <h1>Chi tiết sản phẩm</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $supplier->ten_nha_cung_cap }}</h5>
            <p class="card-text">Địa chỉ: {{ $supplier->dia_chi }}</p>
            <p class="card-text">Số điện thoại: {{ $supplier->gia_ban }}</p>
            <p class="card-text">Email: {{ $supplier->email }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-success">Danh sách</a>
           
        </div>
    </div>
</div>
@endsection