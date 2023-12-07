<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuongHieu extends Model
{
    use HasFactory;

    protected $table = 'thuong_hieus';

    protected $fillable = [
        'ten_thuong_hieu',
        'url_thuong_hieu',
        'icon_thuong_hieu',
        'tinh_trang',
    ];
}
