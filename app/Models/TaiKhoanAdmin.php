<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoanAdmin extends Model
{
    use HasFactory;

    protected $table = 'tai_khoan_admins';

    protected $fillable = [
        'email',
        'password',
        'ho_lot',
        'ten_admin',
        'ngay_sinh',
        'so_dien_thoai',
        'dia_chi',
        'id_phan_quyen',
        'trang_thai',
    ];
}
