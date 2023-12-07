<?php

namespace App\Http\Controllers;

use App\Models\PhanQuyen;
use Illuminate\Http\Request;

class PhanQuyenController extends Controller
{
    public function getData()
    {
        // Lấy tất cả dữ liệu mà ko có điều kiện gì cả
        $data   =   PhanQuyen::get();
        return response()->json([
            'data'      => $data,
        ]);
    }
    public function createData(Request $request)
    {
        PhanQuyen::create([
            'ten_quyen'         => $request->ten_quyen,
            'trang_thai'         => $request->trang_thai,
            'danh_sach_quyen'   => $request->danh_sach_quyen,
        ]);
        return response()->json([
            'status'    => 1,
            'message'   => 'Thêm Mói Phân Quyền Thành Công!',
        ]);
    }
    public function deleteData(Request $request)
    {
        $quyen     = PhanQuyen::where('id', $request->id)->first();
        if ($quyen) {
            $quyen->delete();
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã xóa phần quyền thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Quyền không tồn tại!',
            ]);
        }
    }

    public function updateData(Request $request)
    {
        $quyen     = PhanQuyen::where('id', $request->id)->first();
        if ($quyen) {
            $quyen->update($request->all());
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã cập nhật phần quyền thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Quyền không tồn tại!',
            ]);
        }
    }

    public function statusData(Request $request)
    {
        $quyen     = PhanQuyen::where('id', $request->id)->first();
        if ($quyen) {
            $quyen->trang_thai = !$quyen->trang_thai;
            $quyen->save();
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã đổi trạng thái phần quyền thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Quyền không tồn tại!',
            ]);
        }
    }
}
