@extends('admin.master')
@section('content')
<div class="container">
    <h1>Danh sách đơn hàng</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Thêm đơn hàng</a>
    <table class="table table-striped mt-3">
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Khách hàng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->ngay_dat_hang }}</td>
                    <td>{{ $order->tong_tien }}</td>
                    <td>{{ $order->id_khach_hang  }}</td>
                    <td>
                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">Xem</a>
                        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
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