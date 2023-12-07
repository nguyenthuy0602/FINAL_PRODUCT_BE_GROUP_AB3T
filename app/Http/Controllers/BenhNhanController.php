<?php

namespace App\Http\Controllers;

use App\Models\BenhNhan;
use Illuminate\Http\Request;

class BenhNhanController extends Controller
{
    public function getData()
    {
        $data = BenhNhan::get();
        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }
    public function createData(Request $request)
    {
        BenhNhan::create([
            'ten_benh_nhan'      => $request->ten_benh_nhan,
            'ngay_sinh'          => $request->ngay_sinh,
            'gioi_tinh'          => $request->gioi_tinh,
            'dia_chi'            => $request->dia_chi,
        ]);

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã tạo mới bệnh nhân thành công!',
        ]);
    }
    public function deleteData(Request $request)
    {
        $benh_nhan = BenhNhan::where('id', $request->id)->first();
        if ($benh_nhan) {
            $benh_nhan->delete();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã xóa bệnh nhân thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy bệnh nhân",
            ]);
        }
    }
    public function updateData(Request $request)
    {
        $benh_nhans = BenhNhan::where('id', $request->id)->first();
        if ($benh_nhans) {
            $benh_nhans->update($request->all());
            return response()->json([
                'status'        => 1,
                'message'       => "Đã cập nhập bệnh nhân thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy bệnh nhân",
            ]);
        }
    }
}
