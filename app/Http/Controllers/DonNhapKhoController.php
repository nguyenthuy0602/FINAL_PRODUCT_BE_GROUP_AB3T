<?php

namespace App\Http\Controllers;

use App\Models\DonNhapKho;
use Illuminate\Http\Request;

class DonNhapKhoController extends Controller
{

    public function getData()
    {
        $data   = DonNhapKho::get();

        return response()->json([
            'data'  =>  $data
        ]);
    }
    public function createData(Request $request)
    {
        $data   = $request->all();

        DonNhapKho::create($data);

        return response()->json([
            'status'    =>   true,
            'message'   =>  'Đã tạo phiếu nhập kho',
        ]);
    }
    public function deleteData(Request $request)
    {
        $donNhapKho = DonNhapKho::where('id', $request->id)->first();
        if ($donNhapKho) {
            $donNhapKho->delete();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã xóa Phiếu Nhập Kho thành công",
            ]);
        } else {
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy Phiếu Nhập Kho",
            ]);
        }
    }
}
