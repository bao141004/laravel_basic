<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetailModel extends Model
{
    use HasFactory;
    protected $table = 'order_details';

    protected $fillable = [
        'id_don_hang', 'id_san_pham', 'so_luong', 'gia_ban'
    ];
    
}
