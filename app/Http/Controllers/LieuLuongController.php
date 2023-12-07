<?php

namespace App\Http\Controllers;

use App\Models\LieuLuong;
use Illuminate\Http\Request;

class LieuLuongController extends Controller
{
    public function getData()
    {
        $data = LieuLuong::get();
        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }
    public function createData(Request $request)
    {
        LieuLuong::create([
            'ten_thuoc'      => $request->ten_thuoc,
            'so_luong'      => $request->so_luong,
            'tan_suat_dung'      => $request->tan_suat_dung,
            'so_ngay_dung'      => $request->so_ngay_dung,

        ]);

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã tạo mới liều lượng thành công!',
        ]);
    }
    public function deleteData(Request $request)
    {
        $lieu_luong = LieuLuong::where('id', $request->id)->first();
        if ($lieu_luong) {
            $lieu_luong->delete();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã xóa liều lượng thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy liều lượng",
            ]);
        }
    }
    public function updateData(Request $request)
    {
        $lieu_luong = LieuLuong::where('id', $request->id)->first();
        if ($lieu_luong) {
            $lieu_luong->update($request->all());
            return response()->json([
                'status'        => 1,
                'message'       => "Đã cập nhập liều lượng thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy liều lượng",
            ]);
        }
    }
}
