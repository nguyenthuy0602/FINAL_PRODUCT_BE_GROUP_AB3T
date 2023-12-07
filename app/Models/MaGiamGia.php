<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaGiamGia extends Model
{
    use HasFactory;

    protected $table = 'ma_giam_gias';

    protected $fillable = [
        'so_tien_giam',
        'phan_tram_giam',
        'tinh_trang',
        'id_don_hang',
        'code_giam_gia',
    ];
}
