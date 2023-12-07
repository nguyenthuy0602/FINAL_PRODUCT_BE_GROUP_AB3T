<?php

namespace App\Http\Controllers;

use App\Models\ThuongHieu;
use Illuminate\Http\Request;

class ThuongHieuController extends Controller
{
    public function createData(Request $request)
    {
        ThuongHieu::create([
            'ten_thuong_hieu'       => $request->ten_thuong_hieu,
            'url_thuong_hieu'       => $request->url_thuong_hieu,
            'icon_thuong_hieu'      => $request->icon_thuong_hieu,
            'tinh_trang'            => $request->tinh_trang,
        ]);

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã tạo mới thương hiệu thành công!',
        ]);
    }
    public function getData()
    {
        // Lấy tất cả dữ liệu mà ko có điều kiện gì cả
        $data   =   ThuongHieu::get();

        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }
    public function deleteData(Request $request)
    {
        $thuong_hieu     = ThuongHieu::where('id', $request->id)->first();
        if ($thuong_hieu) {
            $thuong_hieu->delete();
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã xóa thương hiệu thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Thương hiệu không tồn tại!',
            ]);
        }
    }

    public function updateData(Request $request)
    {
        $thuong_hieu     = ThuongHieu::where('id', $request->id)->first();
        if ($thuong_hieu) {
            $thuong_hieu->update($request->all());
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã cập nhật thương hiệu thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Thương hiệu không tồn tại!',
            ]);
        }
    }

    public function statusData(Request $request)
    {
        $thuong_hieu     = ThuongHieu::where('id', $request->id)->first();
        if ($thuong_hieu) {
            $thuong_hieu->tinh_trang = !$thuong_hieu->tinh_trang;
            $thuong_hieu->save();
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã đổi trạng thái thương hiệu thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Thương hiệu không tồn tại!',
            ]);
        }
    }
}
