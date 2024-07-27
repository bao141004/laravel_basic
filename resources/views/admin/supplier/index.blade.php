@extends('admin.master')
@section('content')
<div class="container">
    <h1>Danh sách sản phẩm</h1>
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Thêm nhà cung cấp</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên nhà cung cấp</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $supplier)
            <tr>
                <td>{{ $supplier->id }}</td>
                <td>{{ $supplier->ten_nha_cung_cap }}</td>
                <td>{{ $supplier->dia_chi }}</td>
                <td>{{ $supplier->dien_thoai }}</td>
                <td>{{ $supplier->email }}</td>
                <td>
                    <a href="{{ route('suppliers.show', $supplier->id) }}" class="btn btn-info">Xem</a>
                    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" onsubmit="return confirm ('Bạn có chắc muốn xóa ??')" style="display:inline;">
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