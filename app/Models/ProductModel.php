<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'ten_san_pham', 'mo_ta', 'gia_ban', 'so_luong_ton', 'id_nha_cung_cap'
    ];

    public function supplier()
    {
        return $this->belongsTo(SupplierModel::class, 'id_nha_cung_cap');
    }

    public function orders()
    {
        return $this->belongsToMany(OrderModel::class, 'order_details', 'id_san_pham', 'id_don_hang')
                    ->withPivot('so_luong', 'gia_ban');
    }
}
