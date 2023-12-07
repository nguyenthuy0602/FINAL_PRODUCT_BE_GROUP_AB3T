<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiBenh extends Model
{
    use HasFactory;
    protected $table = 'loai_benhs';
    protected $fillable = [
        'ten_benh',
        'ghi_chu',
    ];
}
