<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonNhapKho extends Model
{
    use HasFactory;

    protected $table = 'don_nhap_khos';

    protected $fillable = [
        'id_nha_cung_cap',
        'tong_tien',
        'ghi_chu',
        'ma_phieu_nhap_kho',
    ];
}
