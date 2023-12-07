<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use App\Models\SanPham;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function dataTrangChu()
    {
        $sanPhamNoiBat  = SanPham::where('id_chuyen_muc', 2)
                                 ->where('tinh_trang', 1)
                                 ->take(4)->get();

        $sanPhamMoi     = SanPham::orderByDESC('created_at')
                                 ->where('tinh_trang', 1)
                                 ->take(8)->get();
        $tuiBalo        = SanPham::where('id_chuyen_muc', 3)
                                 ->where('tinh_trang', 1)
                                 ->take(8)->get();

        return response()->json([
            'sanPhamNoiBat'     =>  $sanPhamNoiBat,
            'sanPhamMoi'        =>  $sanPhamMoi,
            'tuiBalo'           =>  $tuiBalo,
        ]);
    }

    public function dataBaiViet()
    {
        $baiViet = BaiViet::where('trang_thai', 1)
                          ->take(10)
                          ->get();

        return response()->json([
            'baiViet'     =>  $baiViet,
        ]);
    }

    public function dataTatCaSanPham()
    {
        $sanPham = SanPham::where('tinh_trang', 1)
                            ->get();
        return response()->json([
            'tatCaSanPham'     =>  $sanPham,
        ]);
    }
}
