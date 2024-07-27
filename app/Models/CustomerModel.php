<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    protected $table = 'customers';

    protected $fillable = [
        'ten_khach_hang', 'dia_chi', 'dien_thoai', 'email'
    ];
}
