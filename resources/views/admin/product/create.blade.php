@extends('admin.master')
@section('content')
<div class="container">
    <h1>Thêm sản phẩm mới</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="ten_san_pham">Tên sản phẩm</label>
            <input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham" required>
        </div>
        <div class="form-group">
            <label for="mo_ta">Mô tả</label>
            <textarea class="form-control" id="mo_ta" name="mo_ta"></textarea>
        </div>
        <div class="form-group">
            <label for="gia_ban">Giá bán</label>
            <input type="number" class="form-control" id="gia_ban" name="gia_ban" required>
        </div>
        <div class="form-group">
            <label for="so_luong_ton">Số lượng tồn</label>
            <input type="number" class="form-control" id="so_luong_ton" name="so_luong_ton" required>
        </div>
        <div class="form-group">
            <label for="id_nha_cung_cap">Nhà cung cấp</label>
            <select class="form-control" id="id_nha_cung_cap" name="id_nha_cung_cap" required>
                @foreach($listSup as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->ten_nha_cung_cap }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{route('products.index')}}" class="btn btn-success">Danh sach</a>
    </form>
    
</div>
@endsection