<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LieuLuong extends Model
{
    use HasFactory;
    protected $table = 'lieu_luongs';
    protected $fillable = [
        'ten_thuoc',
        'so_luong',
        'tan_suat_dung',
        'so_ngay_dung',
    ];
}
