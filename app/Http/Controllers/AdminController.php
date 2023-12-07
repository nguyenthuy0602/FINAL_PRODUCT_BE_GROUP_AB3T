<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getData(){
        $data = Admin::get();
        return response()->json([
            'status'    => 1,
            'data'      => $data,
        ]);
    }
    public function createData(Request $request){
        Admin::create([
            'email'                 => $request->email,
            'password'              => $request->password,
            'ho_lot'                => $request->ho_lot,
            'ten_admin'             => $request->ten_admin,
            'id_phan_quyen'         => $request->id_phan_quyen,
            'ngay_sinh'             => $request->ngay_sinh,
            'so_dien_thoai'         => $request->so_dien_thoai,
            'dia_chi'               => $request->dia_chi,
            'trang_thai'            => $request->trang_thai,
        ]);
        return response()->json([
            'status'        => 1,
            'message'       => "Đã thêm mới Admin thành công!",
        ]);
    }
    public function statusData(Request $request){
        $quyen = Admin::where('id', $request->id)->first();
        if($quyen){
            $quyen->trang_thai = !$quyen->trang_thai;
            $quyen->save();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã cập nhập trạng thái Admin thành công",
            ]);
        }else{
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy Admin",
            ]);
        }
    }
    public function deleteData(Request $request){
        $quyen = Admin::where('id', $request->id)->first();
        if($quyen){
            $quyen->delete();
            return response()->json([
                'status'        => 1,
                'message'       => "Đã xóa Admin thành công",
            ]);
        }else{
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy Admin",
            ]);
        }
    }
    public function updateData(Request $request){
        $admin = Admin::where('id', $request->id)->first();
        if($admin){
            $admin->update($request->all());
            return response()->json([
                'status'        => 1,
                'message'       => "Đã cập nhập admin thành công",
            ]);
        }else{
            return response()->json([
                'status'        => 0,
                'message'       => "Không tìm thấy admin",
            ]);
        }
    }
}
