<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function getData()
    {
        $data = BaiViet::get();
        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }
    public function createData(Request $request)
    {
        $data = $request->all();
        BaiViet::create($data);
        return response()->json([
            'status'        => 1,
            'message'       => "Đã thêm mới bài viết thành công!",
        ]);
    }
    public function deleteData(Request $request)
    {
        $bai_viet = BaiViet::where('id', $request->id)->first();
        if ($bai_viet) {
            $bai_viet->delete();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã xóa bài viết thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy bài viết",
            ]);
        }
    }
    public function updateData(Request $request)
    {
        $bai_viet = BaiViet::where('id', $request->id)->first();
        if ($bai_viet) {
            $bai_viet->update($request->all());
            return response()->json([
                'status'        => 1,
                'message'       => "Đã cập nhập bài viết thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy bài viết",
            ]);
        }
    }

    public function statusData(Request $request)
    {
        $bai_viet = BaiViet::where('id', $request->id)->first();
        if ($bai_viet) {
            $bai_viet->trang_thai = !$bai_viet->trang_thai;
            $bai_viet->save();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã đổi trạng thái bài viết thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy bài viết",
            ]);
        }
    }
}
