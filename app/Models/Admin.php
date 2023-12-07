<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $fillable = [
        'email',
        'password',
        'ho_lot',
        'ten_admin',
        'id_phan_quyen',
        'ngay_sinh',
        'so_dien_thoai',
        'dia_chi',
        'trang_thai',
    ];
}
