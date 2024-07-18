<?php

use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
// Yêu cầu 1: Truy vấn tất cả các bản ghi - Viết truy vấn để lấy tất cả các bản ghi từ bảng users.
    // DB::table('users')->ddRawSql();

// Yêu cầu 2: Truy vấn với điều kiện - Viết truy vấn để lấy các bản ghi từ bảng users mà cột age lớn hơn 25.
    // DB::table('users')->where('age','>','25')->ddRawSql();

// Yêu cầu 3: Truy vấn với nhiều điều kiện - Viết truy vấn để lấy các bản ghi từ bảng users mà cột age lớn hơn 25 và status bằng 'active'.
    // DB::table('users')->where('age','>','25')->where('status','active')->ddRawSql();

// Yêu cầu 4: Sắp xếp kết quả - Viết truy vấn để lấy các bản ghi từ bảng users, sắp xếp theo age giảm dần.
    //  DB::table('users')->orderByDesc('age')->ddRawSql();

// Yêu cầu 5: Giới hạn số lượng kết quả - Viết truy vấn để lấy 10 bản ghi đầu tiên từ bảng products.
    // DB::table('products')->limit(10)->ddRawSql();

// Yêu cầu 6: Truy vấn với điều kiện OR - Viết truy vấn để lấy các bản ghi từ bảng orders mà status là 'completed' hoặc total lớn hơn 100.
    //  DB::table('orders')->where('status','completed')->orWhere('total','>','100')->ddRawSql();

// Yêu cầu 7: Truy vấn với LIKE - Viết truy vấn để lấy các bản ghi từ bảng customers mà name chứa chuỗi 'John'.
    // DB::table('customers')->where('name','like','%John%')->ddRawSql();

// Yêu cầu 8: Truy vấn với BETWEEN - Viết truy vấn để lấy các bản ghi từ bảng sales mà amount nằm trong khoảng từ 1000 đến 5000.
    // DB::table('sales')->whereBetween('amount',[1000,5000])->ddRawSql();

// Yêu cầu 9: Truy vấn với IN - Viết truy vấn để lấy các bản ghi từ bảng employees mà department_id nằm trong danh sách [1, 2, 3].
    // DB::table('employees')->whereIn('department_id',[1, 2, 3])->ddRawSql();

// Yêu cầu 10: Thực hiện JOIN - Viết truy vấn để lấy thông tin từ bảng orders và bảng customers với điều kiện orders.customer_id = customers.id.
    // DB::table('orders')
    // ->join('customers','orders.customer_id', '=' ,'customers.id')
    // ->ddRawSql();

// Yêu cầu 11: Truy vấn với nhóm và tổng hợp - Viết truy vấn để tính tổng số lượng quantity của mỗi sản phẩm từ bảng order_items, nhóm theo product_id.
    // DB::table('order_items')->selectRaw('product_id,SUM(quantity) as total')
    // ->groupBy('product_id')->ddRawSql();

// Yêu cầu 12: Cập nhật bản ghi - Viết truy vấn để cập nhật status của tất cả các đơn hàng trong bảng orders thành 'shipped' nếu status hiện tại là 'processing'.
    // DB::table('orders')
    // ->where('status','processing')
    // ->update([
    //     'status' => 'shipped',
    // ])

// Yêu cầu 13: Xóa bản ghi - Viết truy vấn để xóa tất cả các bản ghi từ bảng logs mà created_at trước ngày 1/1/2020.
    // DB::table('logs')->whereDate('create_at','<','2020-01-01')->delete();

// Yêu cầu 14: Thêm bản ghi mới - Viết truy vấn để thêm một bản ghi mới vào bảng products với các thông tin về tên sản phẩm, giá và số lượng.
    // DB::table('products')
    // ->insert([
    //     'ten' => 'A',
    //     'gia' => '100',
    //     'so_luong' => '2',
    // ]);

// Yêu cầu 15: Sử dụng Raw Expressions - Viết truy vấn để lấy các bản ghi từ bảng users mà tháng sinh (birth_date) là tháng 5.
    // DB::table('users')->whereRaw('month(birth_date)=5')->ddRawSql();


    
});
$router->get('index',[HomeController::class, 'index']);
