@extends('admin.master')
@section('content')
<div class="container">
    <h1>Chi tiết sản phẩm</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ngày đặt: {{ $order->ngay_dat_hang }}</h5>
            <p class="card-text">Tổng tiền: {{ $order->tong_tien }}</p>
            <p class="card-text">Id khách hàng: {{ $order->id_khach_hang }}</p>
    
            <a href="{{ route('products.index') }}" class="btn btn-success">Danh sách</a>
           
        </div>
    </div>
</div>
@endsection