<?php

namespace App\Http\Controllers;

use App\Models\NhaCungCap;
use Illuminate\Http\Request;

class NhaCungCapController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $nhaCungCap = NhaCungCap::create($data);
        return response()->json([
            'status'    => true,
            'message'   => 'Đã tạo mới nhà cung cấp thành công!',
        ]);
    }

    public function data()
    {
        $data = NhaCungCap::all();

        return response()->json([
            'data'  => $data,
        ]);
    }

    public function update(Request $request)
    {

        $data    = $request->all();
        $nhaCungCap = NhaCungCap::find($request->id);
        $nhaCungCap->update($data);
        return response()->json([
            'status'    => true,
            'message'   => 'Đã cập nhật thành công nhà cung cấp!',
        ]);
    }

    public function destroy(Request $request)
    {
        $nhaCungCap = NhaCungCap::where('id', $request->id)->first();
        $nhaCungCap->delete();
        return response()->json([
            'status'    => true,
            'message'   => 'Đã xóa thành công nhà cung cấp!',
        ]);
    }

    public function doiTrangThai(Request $request)
    {
        $nhaCungCap = NhaCungCap::find($request->id);

        if($nhaCungCap) {
            $nhaCungCap->tinh_trang = !$nhaCungCap->tinh_trang;
            $nhaCungCap->save();
            return response()->json([
                'status'    => true,
                'message'   => 'Đã đổi trạng thái thành công!'
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => 'Nhà cung cấp không tồn tại!'
            ]);
        }
    }
    public function search(Request $request)
    {
        $list = NhaCungCap::where('nha_cung_caps.ma_so_thue', 'like', '%' . $request->key_search . '%')
                        ->orWhere('nha_cung_caps.ten_cong_ty', 'like', '%' . $request->key_search . '%')
                        ->orWhere('nha_cung_caps.ten_nguoi_dai_dien', 'like', '%' . $request->key_search . '%')
                        ->orWhere('nha_cung_caps.so_dien_thoai', 'like', '%' . $request->key_search . '%')
                        ->orWhere('nha_cung_caps.email', 'like', '%' . $request->key_search . '%')
                        ->orWhere('nha_cung_caps.ten_goi_nho', 'like', '%' . $request->key_search . '%')
                        ->get();

        return response()->json([
            'list'  => $list
        ]);
    }
}
