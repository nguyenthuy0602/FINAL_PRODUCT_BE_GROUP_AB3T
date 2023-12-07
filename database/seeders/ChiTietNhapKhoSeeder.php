<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ChiTietNhapKhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //xóa dữ liệu trong table
        DB::table('chi_tiet_nhap_khos')->delete();

        // Reset id về lại 1
        DB::table('chi_tiet_nhap_khos')->truncate();
        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('chi_tiet_nhap_khos')->insert([
            [
                'id_san_pham'           => 1,
                'ten_san_pham'          => 'BALO LOUIS VUITTON DISCOVERY PM MONOGRAM',
                'so_luong_nhap'         => 2,
                'don_gia_nhap'          => 50000,
                'thanh_tien_nhap'       => 100000,
                'id_don_nhap_kho'   => 1,
            ],

            [
                'id_san_pham'           => 2,
                'ten_san_pham'          => 'BALO LOUIS VUITTON DISCOVERY PM',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 60000,
                'thanh_tien_nhap'       => 180000,
                'id_don_nhap_kho'   => 1,
            ],

            [
                'id_san_pham'           => 3,
                'ten_san_pham'          => 'TÚI LOUIS VUITTONO OUTDOOR MESSENGER TAIGARAMA',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 60000,
                'thanh_tien_nhap'       => 180000,
                'id_don_nhap_kho'   => 1,
            ],

            [
                'id_san_pham'           => 4,
                'ten_san_pham'          => 'TÚI LOUIS VUITTON SAC PLAT HORIZONTAL ZIPPE',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 70000,
                'thanh_tien_nhap'       => 210000,
                'id_don_nhap_kho'   => 1,
            ],
            //2
            [
                'id_san_pham'           => 5,
                'ten_san_pham'          => 'TÚI PRADA RE-NYLON AND LEATHER BLACK',
                'so_luong_nhap'         => 2,
                'don_gia_nhap'          => 50000,
                'thanh_tien_nhap'       => 100000,
                'id_don_nhap_kho'   => 2,
            ],

            [
                'id_san_pham'           => 6,
                'ten_san_pham'          => 'TÚI PRADA NYLON AND SAFFIANO LEATHER PHONE BAG',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 60000,
                'thanh_tien_nhap'       => 180000,
                'id_don_nhap_kho'   => 2,
            ],

            [
                'id_san_pham'           => 7,
                'ten_san_pham'          => 'TÚI DIOR HIT THE ROAD MESSENGER POUCH',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 60000,
                'thanh_tien_nhap'       => 180000,
                'id_don_nhap_kho'   => 2,
            ],

            [
                'id_san_pham'           => 8,
                'ten_san_pham'          => 'TÚI GUCCI OPHIDIA GG BELT BAG',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 70000,
                'thanh_tien_nhap'       => 210000,
                'id_don_nhap_kho'   => 2,
            ],
            //3
            [
                'id_san_pham'           => 9,
                'ten_san_pham'          => 'ÁO PHÔNG BURBERRY NATURAL CHECKED',
                'so_luong_nhap'         => 2,
                'don_gia_nhap'          => 50000,
                'thanh_tien_nhap'       => 100000,
                'id_don_nhap_kho'   => 3,
            ],

            [
                'id_san_pham'           => 10,
                'ten_san_pham'          => 'ÁO PHÔNG LOUIS VUITTON SHIBORI TIE-DYE',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 60000,
                'thanh_tien_nhap'       => 180000,
                'id_don_nhap_kho'   => 3,
            ],

            [
                'id_san_pham'           => 11,
                'ten_san_pham'          => 'ÁO SƠ MI LOUIS VUITTON MONOGRAM AQUAGARDEN',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 60000,
                'thanh_tien_nhap'       => 180000,
                'id_don_nhap_kho'   => 3,
            ],

            [
                'id_san_pham'           => 12,
                'ten_san_pham'          => 'ÁO PHÔNG LOUIS VUITTON MONOGRAM COMICS',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 70000,
                'thanh_tien_nhap'       => 210000,
                'id_don_nhap_kho'   => 3,
            ],
            //4
            [
                'id_san_pham'           => 13,
                'ten_san_pham'          => 'ÁO POLO GUCCI GG NAVY KNIT',
                'so_luong_nhap'         => 2,
                'don_gia_nhap'          => 50000,
                'thanh_tien_nhap'       => 100000,
                'id_don_nhap_kho'   => 4,
            ],

            [
                'id_san_pham'           => 14,
                'ten_san_pham'          => 'ÁO POLO LOUIS VUITTON LOGO SIGNATURE',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 60000,
                'thanh_tien_nhap'       => 180000,
                'id_don_nhap_kho'   => 4,
            ],

            [
                'id_san_pham'           => 15,
                'ten_san_pham'          => 'ÁO POLO GUCCI GG STRIPE',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 60000,
                'thanh_tien_nhap'       => 180000,
                'id_don_nhap_kho'   => 4,
            ],

            [
                'id_san_pham'           => 16,
                'ten_san_pham'          => 'ÁO PHÔNG LOUIS VUITTON LV SPREAD EMBROIDERY',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 70000,
                'thanh_tien_nhap'       => 210000,
                'id_don_nhap_kho'   => 4,
            ],
            //5
            [
                'id_san_pham'           => 17,
                'ten_san_pham'          => 'ÁO KHOÁC BURBERRY BROWN CHECKED BOMBER',
                'so_luong_nhap'         => 2,
                'don_gia_nhap'          => 50000,
                'thanh_tien_nhap'       => 100000,
                'id_don_nhap_kho'   => 5,
            ],

            [
                'id_san_pham'           => 18,
                'ten_san_pham'          => 'ÁO LEN BURBERRY CHECK PATTERN GREY',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 60000,
                'thanh_tien_nhap'       => 180000,
                'id_don_nhap_kho'   => 5,
            ],

            [
                'id_san_pham'           => 19,
                'ten_san_pham'          => 'ÁO LEN DIOR OBLIQUE INSERTS',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 60000,
                'thanh_tien_nhap'       => 180000,
                'id_don_nhap_kho'   => 5,
            ],

            [
                'id_san_pham'           => 20,
                'ten_san_pham'          => 'ÁO CARDIGAN THOM BROWNE 4-BAR MILANO STITCH NAVY',
                'so_luong_nhap'         => 3,
                'don_gia_nhap'          => 70000,
                'thanh_tien_nhap'       => 210000,
                'id_don_nhap_kho'   => 5,
            ],
        ]);


    }
}
