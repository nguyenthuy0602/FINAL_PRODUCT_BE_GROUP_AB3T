<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeDonThuoc extends Model
{
    use HasFactory;
    protected $table = 'ke_don_thuocs';
    protected $fillable = [
        'ten_benh_nhan',
        'gioi_tinh',
        'ten_bac_si',
        'so_dien_thoai',
        'chuyen_mon',
        'so_luong',
        'chan_doan',
        'ten_thuoc',
    ];
}
