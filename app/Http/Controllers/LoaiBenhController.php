<?php

namespace App\Http\Controllers;

use App\Models\LoaiBenh;
use Illuminate\Http\Request;

class LoaiBenhController extends Controller
{
    public function getData()
    {
        $data = LoaiBenh::get();
        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }
    public function createData(Request $request)
    {
        LoaiBenh::create([
            'ten_benh'      => $request->ten_benh,
            'ghi_chu'          => $request->ghi_chu,
        ]);

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã tạo mới loại bệnh thành công!',
        ]);
    }
    public function deleteData(Request $request)
    {
        $benh_nhan = LoaiBenh::where('id', $request->id)->first();
        if ($benh_nhan) {
            $benh_nhan->delete();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã xóa loại bệnh thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy loại bệnh",
            ]);
        }
    }
    public function updateData(Request $request)
    {
        $benh_nhans = LoaiBenh::where('id', $request->id)->first();
        if ($benh_nhans) {
            $benh_nhans->update($request->all());
            return response()->json([
                'status'        => 1,
                'message'       => "Đã cập nhập loại bệnh thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy loại bệnh",
            ]);
        }
    }
}
