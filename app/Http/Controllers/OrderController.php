<?php

namespace App\Http\Controllers;

use App\Models\OrderModel;
use App\Models\CustomerModel;
use App\Models\ProductModel;
use App\Models\OrderDetailModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $list = OrderModel::all();
        return view('admin.order.index', compact('list'));
    }

    public function create()
    {
        $customers = CustomerModel::all();
        $products = ProductModel::all();
        return view('admin.order.create', compact('customers', 'products'));
    }

    public function store(Request $request)
    {
        $order = OrderModel::create([
            'ngay_dat_hang' => $request->ngay_dat_hang,
            'tong_tien' => $request->tong_tien,
            'id_khach_hang' => $request->id_khach_hang
        ]);

        foreach ($request->products as $product) {
            OrderDetailModel::create([
                'id_don_hang' => $order->id,
                'id_san_pham' => $product['id'],
                'so_luong' => $product['so_luong'],
                'gia_ban' => $product['gia_ban']
            ]);
        }

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function show(OrderModel $order)
    {
        return view('admin.order.show', compact('order'));
    }

    public function edit(OrderModel $order)
    {
        $customers = CustomerModel::all();
        $products = ProductModel::all();
        return view('admin.order.edit', compact('order', 'customers', 'products'));
    }

    public function update(Request $request, OrderModel $order)
    {
        $order->update([
            'ngay_dat_hang' => $request->ngay_dat_hang,
            'tong_tien' => $request->tong_tien,
            'id_khach_hang' => $request->id_khach_hang
        ]);
        $order->orderDetails()->delete();
        foreach ($request->products as $product) {
            OrderDetailModel::create([
                'id_don_hang' => $order->id,
                'id_san_pham' => $product['id'],
                'so_luong' => $product['so_luong'],
                'gia_ban' => $product['gia_ban']
            ]);
        }

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy(OrderModel $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}