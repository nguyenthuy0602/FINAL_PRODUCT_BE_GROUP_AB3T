<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BacSiController;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\BenhNhanController;
use App\Http\Controllers\ChiTietNhapKhoController;
use App\Http\Controllers\ChuyenMucController;
use App\Http\Controllers\DonNhapKhoController;
use App\Http\Controllers\KeDonThuocController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\LieuLuongController;
use App\Http\Controllers\LoaiBenhController;
use App\Http\Controllers\MaGiamGiaController;
use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\PhanQuyenController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ThuongHieuController;
use App\Http\Controllers\TmpNhapKhoController;
use App\Http\Controllers\TrangChuController;
use App\Models\ChuyenMuc;
use App\Models\DonNhapKho;
use App\Models\KeDonThuoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Danh sách các chức năng của Admin
Route::group(['prefix' => '/admin'], function() {
    Route::group(['prefix'  =>  '/thuong-hieu'], function() {
        Route::get('/data', [ThuongHieuController::class, 'getData']);
        Route::post('/create', [ThuongHieuController::class, 'createData']);
        Route::post('/delete', [ThuongHieuController::class, 'deleteData']);
        Route::post('/update', [ThuongHieuController::class, 'updateData']);
        Route::post('/status', [ThuongHieuController::class, 'statusData']);
    });
    Route::group(['prefix'  =>  '/phan-quyen'], function() {
        Route::get('/data', [PhanQuyenController::class, 'getData']);
        Route::post('/create', [PhanQuyenController::class, 'createData']);
        Route::post('/delete', [PhanQuyenController::class, 'deleteData']);
        Route::post('/update', [PhanQuyenController::class, 'updateData']);
        Route::post('/status', [PhanQuyenController::class, 'statusData']);
    });
    Route::group(['prefix'  =>  '/chuyen-muc'], function() {
        Route::get('/data', [ChuyenMucController::class, 'getData']);
        Route::post('/create', [ChuyenMucController::class, 'createData']);
        Route::post('/delete', [ChuyenMucController::class, 'deleteData']);
        Route::post('/update', [ChuyenMucController::class, 'updateData']);
        Route::post('/status', [ChuyenMucController::class, 'statusData']);
    });

    Route::group(['prefix'  =>  '/ma-giam-gia'], function() {
        Route::get('/data', [MaGiamGiaController::class, 'getData']);
        Route::post('/create', [MaGiamGiaController::class, 'createData']);
        Route::post('/delete', [MaGiamGiaController::class, 'deleteData']);
        Route::post('/update', [MaGiamGiaController::class, 'updateData']);
        Route::post('/status', [MaGiamGiaController::class, 'statusData']);
    });
    Route::group(['prefix'=>'/admin'], function(){
        Route::get('/data', [AdminController::class, "getData"]);
        Route::post('/create', [AdminController::class, "createData"]);
        Route::post('/delete', [AdminController::class, "deleteData"]);
        Route::post('/update', [AdminController::class, "updateData"]);
        Route::post('/status', [AdminController::class, "statusData"]);
    });
    Route::group(['prefix'=>'/san-pham'], function(){
        Route::get('/data', [SanPhamController::class, "getData"]);
        Route::post('/create', [SanPhamController::class, "createData"]);
        Route::post('/delete', [SanPhamController::class, "deleteData"]);
        Route::post('/update', [SanPhamController::class, "updateData"]);
        Route::post('/status', [SanPhamController::class, "statusData"]);
        Route::post('/search', [SanPhamController::class, "searchData"]);
    });
    Route::group(['prefix'=>'/benh-nhan'], function(){
        Route::get('/data', [BenhNhanController::class, "getData"]);
        Route::post('/create', [BenhNhanController::class, "createData"]);
        Route::post('/delete', [BenhNhanController::class, "deleteData"]);
        Route::post('/update', [BenhNhanController::class, "updateData"]);
        Route::post('/status', [BenhNhanController::class, "statusData"]);
    });
    Route::group(['prefix'=>'/loai-benh'], function(){
        Route::get('/data', [LoaiBenhController::class, "getData"]);
        Route::post('/create', [LoaiBenhController::class, "createData"]);
        Route::post('/delete', [LoaiBenhController::class, "deleteData"]);
        Route::post('/update', [LoaiBenhController::class, "updateData"]);
        Route::post('/status', [LoaiBenhController::class, "statusData"]);
    });
    Route::group(['prefix'=>'/bac-si'], function(){
        Route::get('/data', [BacSiController::class, "getData"]);
        Route::post('/create', [BacSiController::class, "createData"]);
        Route::post('/delete', [BacSiController::class, "deleteData"]);
        Route::post('/update', [BacSiController::class, "updateData"]);
        Route::post('/status', [BacSiController::class, "statusData"]);
    });
    Route::group(['prefix'=>'/lieu-luong'], function(){
        Route::get('/data', [LieuLuongController::class, "getData"]);
        Route::post('/create', [LieuLuongController::class, "createData"]);
        Route::post('/delete', [LieuLuongController::class, "deleteData"]);
        Route::post('/update', [LieuLuongController::class, "updateData"]);
        Route::post('/status', [LieuLuongController::class, "statusData"]);
    });
    Route::group(['prefix'=>'/ke-don-thuoc'], function(){
        Route::get('/data', [KeDonThuocController::class, "getData"]);
        Route::post('/create', [KeDonThuocController::class, "createData"]);
        Route::post('/delete', [KeDonThuocController::class, "deleteData"]);
        Route::post('/update', [KeDonThuocController::class, "updateData"]);
        Route::post('/search', [SanPhamController::class, "searchData"]);
        Route::post('/status', [KeDonThuocController::class, "statusData"]);

    });
    Route::group(['prefix'=>'/bai-viet'], function(){
        Route::get('/data', [BaiVietController::class, "getData"]);
        Route::post('/create', [BaiVietController::class, "createData"]);
        Route::post('/delete', [BaiVietController::class, "deleteData"]);
        Route::post('/update', [BaiVietController::class, "updateData"]);
        Route::post('/status', [BaiVietController::class, "statusData"]);
    });
    Route::group(['prefix'  =>  '/tmp-nhap-kho'], function() {
        Route::get('/data', [TmpNhapKhoController::class, 'getData']);
        Route::post('/create', [TmpNhapKhoController::class, 'createData']);
        Route::post('/update', [TmpNhapKhoController::class, 'updateData']);
        Route::post('/delete', [TmpNhapKhoController::class, 'deleteData']);
    });
    Route::group(['prefix'  =>  '/don-nhap-kho'], function() {
        Route::post('/create', [DonNhapKhoController::class, 'createData']);
        Route::post('/delete', [DonNhapKhoController::class, 'deleteData']);
        Route::get('/data', [DonNhapKhoController::class, 'getData']);
    });

    Route::group(['prefix'  =>  '/nha-cung-cap'], function() {
        Route::post('/create', [NhaCungCapController::class, 'store']);
        Route::get('/data', [NhaCungCapController::class, 'data']);
        Route::post('/delete', [NhaCungCapController::class, 'destroy']);
        Route::post('/update', [NhaCungCapController::class, 'update']);
        Route::post('/doi-trang-thai', [NhaCungCapController::class, 'doiTrangThai']);
        Route::post('/search', [NhaCungCapController::class, 'search']);
    });
    Route::group(['prefix'  =>  '/chi-tiet-nhap-kho'], function() {
        Route::post('/data', [ChiTietNhapKhoController::class, 'dataChiTietNhapKho']);
        // Route::post('/create', [ChiTietNhapKhoController::class, 'createData']);
        // Route::post('/update', [ChiTietNhapKhoController::class, 'updateData']);
        // Route::post('/delete', [ChiTietNhapKhoController::class, 'deleteData']);
    });
});

// Dành cho người dùng không đăng nhập
Route::group([''], function(){
    Route::get('/data-menu-trang-chu', [ChuyenMucController::class, 'dataMenuTrangChu']);
    Route::post('/data-san-pham-theo-chuyen-muc', [SanPhamController::class, 'dataSanPhamTheoChuyenMuc']);
    Route::get('/data-trang-chu', [TrangChuController::class, 'dataTrangChu']);
    Route::get('/data-bai-viet', [TrangChuController::class, 'dataBaiViet']);
    Route::get('/data-tat-ca-san-pham', [TrangChuController::class, 'dataTatCaSanPham']);
    Route::get('/chi-tiet-san-pham/{id_san_pham}', [SanPhamController::class, 'dataChiTietSanPham']);
});
