<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'san_phams';

    protected $fillable = [
        'ten_san_pham',
        'hinh_anh',
        'id_chuyen_muc',
        'id_thuong_hieu',
        'gia_goc',
        'gia_ban',
        'mo_ta',
        'so_luong',
        'noi_dung',
        'thong_tin_them',
        'tinh_trang',
    ];
}
