<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BacSi extends Model
{
    use HasFactory;
    protected $table = 'bac_sis';
    protected $fillable = [
        'ten_bac_si',
        'chuyen_mon',
        'so_dien_thoai',
    ];
}
