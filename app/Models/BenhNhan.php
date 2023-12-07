<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenhNhan extends Model
{
    use HasFactory;
    protected $table = 'benh_nhans';
    protected $fillable = [
        'ten_benh_nhan',
        'ngay_sinh',
        'gioi_tinh',
        'dia_chi',

    ];
}
