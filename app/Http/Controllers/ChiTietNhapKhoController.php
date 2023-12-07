<?php

namespace App\Http\Controllers;

use App\Models\ChiTietNhapKho;
use Illuminate\Http\Request;

class ChiTietNhapKhoController extends Controller
{
    public function getData()
    {
        $data   = ChiTietNhapKho::get();

        return response()->json([
            'data'  =>  $data,
            'status'    =>  1,
            'message'   =>  'Đã thêm vào nhập kho!',
        ]);
    }
    public function dataChiTietNhapKho(Request $request)
    {
        $chitiet = ChiTietNhapKho::where('id_don_nhap_kho', $request->id)->get();
        return response()->json([
            'data'  =>$chitiet,
        ]);
    }

    public function createData(Request $request)
    {
        $data   = $request->all();

        ChiTietNhapKho::create($data);

        return response()->json([
            'status'    =>  1,
            'message'   =>  'Đã thêm vào nhập kho!',
        ]);
    }

    // public function updateData(Request $request)
    // {
    //     $chitietnhapkho = ChiTietNhapKho::where('id', $request->id)->first();
    //     if ($chitietnhapkho) {
    //         $data                       =   $request->all();
    //         $data['thanh_tien_nhap']    =   $request->don_gia_nhap * $request->so_luong_nhap;
    //         $chitietnhapkho->update($data);
    //         return response()->json([
    //             'status'        => 1,
    //             'message'       => "Đã cập nhập thành công",
    //         ]);
    //     } else {
    //         return response()->json([
    //             'status'        => 0,
    //             'message'       => "Không tìm thấy dữ liệu",
    //         ]);
    //     }
    // }
    // public function deleteData(Request $request)
    // {
    //     $chitietnhapkho = ChiTietNhapKho::where('id', $request->id)->first();
    //     if ($chitietnhapkho) {
    //         $chitietnhapkho->delete();
    //         return response()->json([
    //             'status'        => 1,
    //             'message'       => "Đã xóa Phiếu Nhập Kho thành công",
    //         ]);
    //     } else {
    //         return response()->json([
    //             'status'        => 0,
    //             'message'       => "Không tìm thấy Phiếu Nhập Kho",
    //         ]);
    //     }
    // }
}
