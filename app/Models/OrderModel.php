<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'ngay_dat_hang', 'tong_tien', 'id_khach_hang'
    ];
}
