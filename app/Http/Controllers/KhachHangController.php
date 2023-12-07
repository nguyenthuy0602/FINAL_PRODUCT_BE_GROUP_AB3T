<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function getData()
    {
        $data = KhachHang::get();
        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }
    public function createData(Request $request)
    {
        $data = $request->all();
        KhachHang::create($data);
        return response()->json([
            'status'        => 1,
            'message'       => "Đã thêm mới khách hàng thành công!",
            'data'          => $data,
        ]);
    }
    public function deleteData(Request $request)
    {
        $khac_hang = KhachHang::where('id', $request->id)->first();
        if ($khac_hang) {
            $khac_hang->delete();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã xóa khách hàng thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy khách hàng",
            ]);
        }
    }
    public function updateData(Request $request)
    {
        $khach_hang = KhachHang::where('id', $request->id)->first();
        if ($khach_hang) {
            $khach_hang->update($request->all());
            return response()->json([
                'status'        => 1,
                'message'       => "Đã cập nhập khách hàng thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy khách hàng",
            ]);
        }
    }
}
