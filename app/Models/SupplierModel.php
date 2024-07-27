<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    use HasFactory;
    protected $table = 'suppliers';

    protected $fillable = [
        'ten_nha_cung_cap', 'dia_chi', 'dien_thoai', 'email'
    ];
}
