<?php

namespace App\Http\Controllers;

use App\Models\KeDonThuoc;
use Illuminate\Http\Request;

class KeDonThuocController extends Controller
{
    // public function searchData(Request $request)
    // {
    //     $ten_can_tim    = '%' . $request->ten_ke_don_thuoc . '%';
    //     $data   = KeDonThuoc::where('ten_don_thuoc', 'like', $ten_can_tim)->get();

    //     return response()->json([
    //         'data'          => $data,
    //     ]);
    // }
    public function createData(Request $request)
    {
        KeDonThuoc::create([
            'ten_benh_nhan' => $request->ten_benh_nhan,
            'gioi_tinh' => $request->gioi_tinh,
            'so_luong' => $request->so_luong,
            'ten_bac_si' => $request->ten_bac_si,
            'so_dien_thoai' => $request->so_dien_thoai,
            'chan_doan' => $request->chan_doan,
            'ten_thuoc' => $request->ten_thuoc,
            'chuyen_mon' => $request->chuyen_mon,
        ]);

        return response()->json([
            'status' => 1,
            'message' => 'Đã tạo mới đơn thuốc thành công!',
        ]);
    }
    public function deleteData(Request $request)
    {
        $ke_don_thuoc = KeDonThuoc::where('id', $request->id)->first();
        if ($ke_don_thuoc) {
            $ke_don_thuoc->delete();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã xóa đơn thuốc thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy đơn thuốc",
            ]);
        }
    }
    public function updateData(Request $request)
    {
        $ke_don_thuocs = KeDonThuoc::where('id', $request->id)->first();
        if ($ke_don_thuocs) {
            $ke_don_thuocs->update($request->all());
            return response()->json([
                'status'        => 1,
                'message'       => "Đã cập nhập đơn thuốc thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy đơn thuốc",
            ]);
        }
    }
}
