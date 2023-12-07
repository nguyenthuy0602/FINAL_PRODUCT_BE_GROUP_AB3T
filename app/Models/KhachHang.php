<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $table = 'khach_hangs';
    protected $fillable = [
        'ho_lot',
        'ten_khach_hang',
        'email',
        'so_dien_thoai',
        'ngay_sinh',
        'gioi_tinh',
        'password',
    ];
}
