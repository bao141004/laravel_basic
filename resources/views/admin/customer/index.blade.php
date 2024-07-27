@extends('admin.master')
@section('content')
<div class="container">
    <h1>Danh sách khách hàng</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">Thêm nhà cung cấp</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên khách hàng</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->ten_khach_hang }}</td>
                <td>{{ $customer->dia_chi }}</td>
                <td>{{ $customer->dien_thoai }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info">Xem</a>
                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" onsubmit="return confirm ('Bạn có chắc muốn xóa ??')" style="display:inline;">
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