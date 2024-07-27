@extends('admin.master')
@section('content')
<div class="container">
    <h1>Chi tiết sản phẩm</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->ten_san_pham }}</h5>
            <p class="card-text">{{ $product->mo_ta }}</p>
            <p class="card-text">Giá bán: {{ $product->gia_ban }}</p>
            <p class="card-text">Số lượng tồn: {{ $product->so_luong_ton }}</p>
            <p class="card-text">Nhà cung cấp: {{ $product->supplier->ten_nha_cung_cap }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-success">Danh sách</a>
           
        </div>
    </div>
</div>
@endsection