<?php

namespace App\Http\Controllers;

use App\Models\MaGiamGia;
use Illuminate\Http\Request;

class MaGiamGiaController extends Controller
{
    public function createData(Request $request)
    {
        MaGiamGia::create([
            'so_tien_giam'      => $request->so_tien_giam,
            'phan_tram_giam'    => $request->phan_tram_giam,
            'tinh_trang'        => $request->tinh_trang,
            'code_giam_gia'     => $request->code_giam_gia,
        ]);

        return response()->json([
            'status' => 1,
            'message' => "Đã thêm mới Mã Giảm Giá Thành Công!"
        ]);

    }

    public function getData()
    {
        $data = MaGiamGia::get();

        return response()->json([
            'status' => 1,
            'data' => $data
        ]);
    }
    public function deleteData(Request $request)
    {
        $ma_giam_gia     = MaGiamGia::where('id', $request->id)->first();
        if ($ma_giam_gia) {
            $ma_giam_gia->delete();
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã xóa Mã giảm giá thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Mã giảm giá không tồn tại!',
            ]);
        }
    }

    public function updateData(Request $request)
    {
        $ma_giam_gia     = MaGiamGia::where('id', $request->id)->first();
        if ($ma_giam_gia) {
            $ma_giam_gia->update($request->all());
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã cập nhật Mã giảm giá thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Mã giảm giá không tồn tại!',
            ]);
        }
    }

    public function statusData(Request $request)
    {
        $ma_giam_gia     = MaGiamGia::where('id', $request->id)->first();
        if ($ma_giam_gia) {
            $ma_giam_gia->tinh_trang = !$ma_giam_gia->tinh_trang;
            $ma_giam_gia->save();
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã đổi trạng thái Mã giảm giá thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Mã giảm giá không tồn tại!',
            ]);
        }
    }
}
