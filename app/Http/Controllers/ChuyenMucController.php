<?php

namespace App\Http\Controllers;

use App\Models\ChuyenMuc;
use Illuminate\Http\Request;

class ChuyenMucController extends Controller
{
    public function dataMenuTrangChu()
    {
        $data   =   ChuyenMuc::where('id', '>', 2)
                             ->where('tinh_trang', 1)
                             ->get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function getData()
    {
        $data = ChuyenMuc::get();
        return response()->json([
            'data' => $data
        ]);
    }

    public function createData(Request $request)
    {
        ChuyenMuc::create([
            'ten_chuyen_muc'        => $request->ten_chuyen_muc,
            'icon_chuyen_muc'       => $request->icon_chuyen_muc,
            'url_chuyen_muc'        => $request->url_chuyen_muc,
            'tinh_trang'            => $request->tinh_trang,
        ]);

        return response()->json([
            'status'    => 1,
            'message'   => 'Thêm Mói Chuyên Mục Thành Công!',
        ]);
    }

    public function deleteData(Request $request)
    {
        $chuyen_muc     = ChuyenMuc::where('id', $request->id)->first();
        if($chuyen_muc) {
            $chuyen_muc->delete();
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã xóa chuyên mục thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Chuyên mục không tồn tại!',
            ]);
        }
    }

    public function updateData(Request $request)
    {
        // dữ liệu gửi lên  $request->all()
        // tìm chuyên mục mình cần cập nhật. nếu như ko có chuyên mục đó thì return 0 + mess
        $chuyen_muc     = ChuyenMuc::where('id', $request->id)->first();
        if($chuyen_muc) {
            // ở đây là đã tìm chuyên mục mình cần cập nhật => cập nhật dựa vào data gửi lên $request->all()
            $chuyen_muc->update($request->all());
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã cập nhật chuyên mục thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Chuyên mục không tồn tại!',
            ]);
        }
    }

    public function statusData(Request $request)
    {
        $chuyen_muc     = ChuyenMuc::where('id', $request->id)->first();
        if($chuyen_muc) {
            $chuyen_muc->tinh_trang = !$chuyen_muc->tinh_trang;
            $chuyen_muc->save();
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã đổi trạng thái chuyên mục thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Chuyên mục không tồn tại!',
            ]);
        }
    }
}
