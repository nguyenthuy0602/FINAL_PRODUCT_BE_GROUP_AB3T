<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhanQuyen extends Model
{
    use HasFactory;
    protected $table = 'phan_quyens';
    protected $fillable = [
        'ten_quyen',
        'trang_thai',
        'danh_sach_quyen',
    ];
}
