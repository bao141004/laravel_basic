@extends('admin.master')
@section('content')
<div class="container">
    <h1>Chỉnh sửa sản phẩm</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="ten_san_pham">Tên sản phẩm</label>
            <input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham" value="{{ $product->ten_san_pham }}" required>
        </div>
        <div class="form-group">
            <label for="mo_ta">Mô tả</label>
            <textarea class="form-control" id="mo_ta" name="mo_ta">{{ $product->mo_ta }}</textarea>
        </div>
        <div class="form-group">
            <label for="gia_ban">Giá bán</label>
            <input type="number" class="form-control" id="gia_ban" name="gia_ban" value="{{ $product->gia_ban }}" required>
        </div>
        <div class="form-group">
            <label for="so_luong_ton">Số lượng tồn</label>
            <input type="number" class="form-control" id="so_luong_ton" name="so_luong_ton" value="{{ $product->so_luong_ton }}" required>
        </div>
        <div class="form-group">
            <label for="id_nha_cung_cap">Nhà cung cấp</label>
            <select class="form-control" id="id_nha_cung_cap" name="id_nha_cung_cap" required>
                @foreach($listSup as $supplier)
                <option value="{{ $supplier->id }}" {{ $product->id_nha_cung_cap == $supplier->id ? 'selected' : '' }}>{{ $supplier->ten_nha_cung_cap }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection