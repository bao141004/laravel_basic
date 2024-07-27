@extends('admin.master')
@section('content')
<div class="container">
    <h1>Chi tiết sản phẩm</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $customer->ten_khach_hang }}</h5>
            <p class="card-text">Địa chỉ: {{ $customer->dia_chi }}</p>
            <p class="card-text">Số điện thoại: {{ $customer->dien_thoai }}</p>
            <p class="card-text">Email: {{ $customer->email }}</p>
            <a href="{{ route('customers.index') }}" class="btn btn-success">Danh sách</a>
           
        </div>
    </div>
</div>
@endsection