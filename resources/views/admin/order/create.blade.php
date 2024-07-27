@extends('admin.master')
@section('content')
<div class="container">
    <h1>Thêm đơn hàng mới</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="ngay_dat_hang">Ngày đặt hàng</label>
            <input type="date" class="form-control" id="ngay_dat_hang" name="ngay_dat_hang" required>
        </div>
        <div class="form-group">
            <label for="tong_tien">Tổng tiền</label>
            <input type="number" class="form-control" id="tong_tien" name="tong_tien" required>
        </div>
        <div class="form-group">
            <label for="id_khach_hang">Id khách hàng</label>
            <select class="form-control" id="id_khach_hang" name="id_khach_hang" required>
                @foreach($listCus as $customer)
                <option value="{{ $customer->id }}">{{ $customer->ten_khach_hang }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{route('orders.index')}}" class="btn btn-success">Danh sach</a>
    </form>
    
</div>
@endsection