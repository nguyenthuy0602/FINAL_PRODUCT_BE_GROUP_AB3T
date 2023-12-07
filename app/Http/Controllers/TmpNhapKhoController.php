<?php

namespace App\Http\Controllers;

use App\Models\TmpNhapKho;
use Illuminate\Http\Request;

class TmpNhapKhoController extends Controller
{
    public function getData()
    {
        $data   = TmpNhapKho::get();

        return response()->json([
            'data'  =>  $data
        ]);
    }

    public function createData(Request $request)
    {
        $data   = $request->all();

        TmpNhapKho::create($data);

        return response()->json([
            'status'    =>  1,
            'message'   =>  'Đã thêm vào nhập kho!',
        ]);
    }

    public function updateData(Request $request)
    {
        $tmpNhapKho = TmpNhapKho::where('id', $request->id)->first();
        if ($tmpNhapKho) {
            $data                       =   $request->all();
            $data['thanh_tien_nhap']    =   $request->don_gia_nhap * $request->so_luong_nhap;
            $tmpNhapKho->update($data);
            return response()->json([
                'status'        => 1,
                'message'       => "Đã cập nhập thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy dữ liệu",
            ]);
        }
    }
    public function deleteData(Request $request)
    {
        $tmpNhapKho = TmpNhapKho::where('id', $request->id)->first();
        if ($tmpNhapKho) {
            $tmpNhapKho->delete();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã xóa Phiếu Nhập Kho thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy Phiếu Nhập Kho",
            ]);
        }
    }
}
