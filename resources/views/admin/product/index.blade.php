@extends('admin.master')
@section('content')
<div class="container">
    <h1>Danh sách sản phẩm</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
                <th>Giá bán</th>
                <th>Số lượng tồn</th>
                <th>Nhà cung cấp</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->ten_san_pham }}</td>
                <td>{{ $product->mo_ta }}</td>
                <td>{{ $product->gia_ban }}</td>
                <td>{{ $product->so_luong_ton }}</td>
                <td>{{ $product->supplier->ten_nha_cung_cap }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Xem</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('products.destroy', $product->id) }}" onsubmit="return confirm ('Bạn có chắc muốn xóa ??')" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection