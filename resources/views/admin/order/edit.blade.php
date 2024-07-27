@extends('admin.master')
@section('content')
<div class="container">
    <h1>Chỉnh sửa nhà cung cấp</h1>
    <form action="{{ route('orders.update',$order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="ten_nha_cung_cap">Tên nhà cung cấp</label>
            <input type="text" class="form-control" id="ten_nha_cung_cap" value="{{$supplier->ten_nha_cung_cap}}" name="ten_nha_cung_cap" required>
        </div>
        <div class="form-group">
            <label for="dia_chi">Địa chỉ</label>
            <input type="text" class="form-control" id="dia_chi"  value="{{$supplier->dia_chi}}" name="dia_chi" required>
        </div>
        <div class="form-group">
            <label for="dien_thoai">Điện thoại</label>
            <input type="number" class="form-control" id="dien_thoai" value="{{$supplier->dien_thoai}}" name="dien_thoai" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value="{{$supplier->email}}" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{route('products.index')}}" class="btn btn-success">Danh sach</a>
    </form>
    
</div>
@endsection