@extends('admin.master')
@section('content')
<div class="container">
    <h1>Thay đổi thông tin khách hàng</h1>
    <form action="{{ route('customers.update',$customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="ten_khach_hang">Tên khách hàng</label>
            <input type="text" class="form-control" id="ten_khach_hang" value="{{$customer->ten_khach_hang}}" name="ten_khach_hang" required>
        </div>
        <div class="form-group">
            <label for="dia_chi">Địa chỉ</label>
            <input type="text" class="form-control" id="dia_chi" value="{{$customer->dia_chi}}" name="dia_chi" required>
        </div>
        <div class="form-group">
            <label for="dien_thoai">Điện thoại</label>
            <input type="number" class="form-control" id="dien_thoai" value="{{$customer->dien_thoai}}" name="dien_thoai" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value="{{$customer->email}}" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{route('customers.index')}}" class="btn btn-success">Danh sach</a>
    </form>
    
</div>
@endsection