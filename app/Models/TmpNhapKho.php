<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmpNhapKho extends Model
{
    use HasFactory;

    protected $table = 'tmp_nhap_khos';

    protected $fillable = [
        'id_san_pham',
        'ten_san_pham',
        'so_luong_nhap',
        'don_gia_nhap',
        'thanh_tien_nhap',
    ];
}
