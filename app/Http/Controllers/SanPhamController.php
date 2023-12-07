<?php

namespace App\Http\Controllers;

use App\Models\ChuyenMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function searchData(Request $request)
    {
        $ten_can_tim    = '%' . $request->ten_san_pham . '%';
        $data   = SanPham::where('ten_san_pham', 'like', $ten_can_tim)->get();

        return response()->json([
            'data'          => $data,
        ]);
    }

    public function dataSanPhamTheoChuyenMuc(Request $request)
    {
        $chuyen_muc     =   ChuyenMuc::where('url_chuyen_muc', $request->url_chuyen_muc)->first();
        $data           =   SanPham::where('id_chuyen_muc', $chuyen_muc->id)->get();

        return response()->json([
            'data'          => $data,
            'chuyen_muc'    => $chuyen_muc,
        ]);
    }

    public function getData(){
        $data = SanPham::get();
        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }
    public function createData(Request $request){
        $data = $request->all();
        $data['so_luong'] = 0;
        SanPham::create($data);
        return response()->json([
            'status'        => 1,
            'message'       => "Đã thêm mới sản phẩm thành công!",
            'data'       => $request->all(),
        ]);
    }
    public function deleteData(Request $request){
        $san_pham = SanPham::where('id', $request->id)->first();
        if($san_pham){
            $san_pham->delete();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã xóa sản phẩm thành công",
            ]);
        }else{
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy sản phẩm",
            ]);
        }
    }
    public function updateData(Request $request){
        $san_pham = SanPham::where('id', $request->id)->first();
        if($san_pham){
            $data = $request->all();
            $data['so_luong'] = 0;
            $san_pham->update($data);
            return response()->json([
                'status'        => 1,
                'message'       => "Đã cập nhập sản phẩm thành công",
            ]);
        }else{
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy sản phẩm",
            ]);
        }
    }
    public function statusData(Request $request){
        $san_pham = SanPham::where('id', $request->id)->first();
        if($san_pham){
            $san_pham->tinh_trang = !$san_pham->tinh_trang;
            $san_pham->save();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã cập nhập trạng thái sản phẩm thành công",
            ]);
        }else{
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy sản phẩm",
            ]);
        }
    }

    public function dataChiTietSanPham($id_san_pham)
    {
        $arr        =   explode("-", $id_san_pham);
        $id         =   end($arr);
        $san_pham   =   SanPham::where('id', $id)->where('tinh_trang', 1)->first();
        if($san_pham) {
            return response()->json([
                'status'      =>    true,
                'data'        =>    $san_pham,
            ]);
        } else {
            return response()->json([
                'status'      =>    false,
                'message'     =>    'Sản phẩm không tồn tại!',
            ]);
        }
    }
}
