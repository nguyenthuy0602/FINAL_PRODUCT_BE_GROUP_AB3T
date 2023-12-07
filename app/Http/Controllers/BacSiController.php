<?php

namespace App\Http\Controllers;

use App\Models\BacSi;
use Illuminate\Http\Request;

class BacSiController extends Controller
{
    public function getData()
    {
        $data = BacSi::get();
        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }
    public function createData(Request $request)
    {
        BacSi::create([
            'ten_bac_si'      => $request->ten_bac_si,
            'chuyen_mon'          => $request->chuyen_mon,
            'so_dien_thoai'          => $request->so_dien_thoai,
        ]);

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã tạo mới bác sĩ thành công!',
        ]);
    }
    public function deleteData(Request $request)
    {
        $bac_si = BacSi::where('id', $request->id)->first();
        if ($bac_si) {
            $bac_si->delete();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã xóa bác sĩ thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy bác sĩ",
            ]);
        }
    }
    public function updateData(Request $request)
    {
        $bac_si = BacSi::where('id', $request->id)->first();
        if ($bac_si) {
            $bac_si->update($request->all());
            return response()->json([
                'status'        => 1,
                'message'       => "Đã cập nhập bác sĩ thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy bác sĩ",
            ]);
        }
    }
}
