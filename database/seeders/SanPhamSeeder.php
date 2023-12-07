<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('san_phams')->delete();

        // Reset id về lại 1
        DB::table('san_phams')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('san_phams')->insert([
            [
                'ten_san_pham'      =>'BALO LOUIS VUITTON DISCOVERY PM MONOGRAM',
                'hinh_anh'          =>'//bizweb.dktcdn.net/thumb/grande/100/386/444/products/balo-louis-vuitton-discovery-pm-monogram-chuan-authentic-1-ac4cdc93-d5b0-42a2-aa1e-53905bd115bf.jpg?v=1693909385647s',
                'id_chuyen_muc'     => 3,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 6000000,
                'gia_ban'           => 6800000,
                'mo_ta'             => 'BALO LOUIS VUITTON DISCOVERY PM MONOGRAM CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'BALO LOUIS VUITTON DISCOVERY PM MONOGRAM CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'BALO LOUIS VUITTON DISCOVERY PM MONOGRAM CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'BALO LOUIS VUITTON DISCOVERY PM',
                'hinh_anh'          =>'//bizweb.dktcdn.net/thumb/grande/100/386/444/products/balo-louis-vuitton-discovery-pm-chuan-authentic-1-bc6b86b1-ccaf-44fa-8431-c5c3a738bbdd.jpg?v=1693909297713',
                'id_chuyen_muc'     => 3,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 6000000,
                'gia_ban'           => 6800000,
                'mo_ta'             => 'BALO LOUIS VUITTON DISCOVERY PM CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'BALO LOUIS VUITTON DISCOVERY PM CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'BALO LOUIS VUITTON DISCOVERY PM CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'TÚI LOUIS VUITTONO OUTDOOR MESSENGER TAIGARAMA',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/tui-louis-vuittono-outdoor-messenger-taigarama-chuan-authentic-1.jpg?v=1693909201583',
                'id_chuyen_muc'     => 3,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 5000000,
                'gia_ban'           => 5800000,
                'mo_ta'             => 'TÚI LOUIS VUITTONO OUTDOOR MESSENGER TAIGARAMA CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'TÚI LOUIS VUITTONO OUTDOOR MESSENGER TAIGARAMA CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'TÚI LOUIS VUITTONO OUTDOOR MESSENGER TAIGARAMA CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'TÚI LOUIS VUITTON SAC PLAT HORIZONTAL ZIPPE',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/tui-xach-louis-vuitton-sac-plat-horizontal-zippe-chuan-hang-chinh-hang-1.jpg?v=1693908711043',
                'id_chuyen_muc'     => 3,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 5000000,
                'gia_ban'           => 8000000,
                'mo_ta'             => 'TÚI LOUIS VUITTON SAC PLAT HORIZONTAL ZIPPE CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'TÚI LOUIS VUITTON SAC PLAT HORIZONTAL ZIPPE CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'TÚI LOUIS VUITTON SAC PLAT HORIZONTAL ZIPPE CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'TÚI PRADA RE-NYLON AND LEATHER BLACK',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/tui-prada-re-nylon-and-leather-black-chuan-authentic-1.jpg?v=1693908381430',
                'id_chuyen_muc'     => 3,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 5000000,
                'gia_ban'           => 5500000,
                'mo_ta'             => 'TÚI PRADA RE-NYLON AND LEATHER BLACK CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'TÚI PRADA RE-NYLON AND LEATHER BLACK CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'TÚI PRADA RE-NYLON AND LEATHER BLACK CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'TÚI PRADA NYLON AND SAFFIANO LEATHER PHONE BAG',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/tui-prada-nylon-and-saffiano-leather-phone-bag-chuan-authentic-1.jpg?v=1693908054470',
                'id_chuyen_muc'     => 3,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 3000000,
                'gia_ban'           => 3800000,
                'mo_ta'             => 'TÚI PRADA NYLON AND SAFFIANO LEATHER PHONE BAG CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'TÚI PRADA NYLON AND SAFFIANO LEATHER PHONE BAG CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'TÚI PRADA NYLON AND SAFFIANO LEATHER PHONE BAG CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'TÚI DIOR HIT THE ROAD MESSENGER POUCH',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/tui-dior-hit-the-road-messenger-pouch-chuan-authentic-1.jpg?v=1693907507743',
                'id_chuyen_muc'     => 3,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 5000000,
                'gia_ban'           => 5800000,
                'mo_ta'             => 'TÚI DIOR HIT THE ROAD MESSENGER POUCH CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'TÚI DIOR HIT THE ROAD MESSENGER POUCH CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'TÚI DIOR HIT THE ROAD MESSENGER POUCH CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'TÚI GUCCI OPHIDIA GG BELT BAG',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/tui-gucci-ophidia-gg-belt-bag-chuan-authentic-1.jpg?v=1693906433227',
                'id_chuyen_muc'     => 3,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 3000000,
                'gia_ban'           => 3800000,
                'mo_ta'             => 'TÚI GUCCI OPHIDIA GG BELT BAG CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'TÚI GUCCI OPHIDIA GG BELT BAG CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'TÚI GUCCI OPHIDIA GG BELT BAG CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],


            //


            [
                'ten_san_pham'      =>'ÁO PHÔNG BURBERRY NATURAL CHECKED',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-phong-burberry-natural-checked-chuan-authentic-1.jpg?v=1682070153523',
                'id_chuyen_muc'     => 2,
                'id_thuong_hieu'    => 2,
                'gia_goc'           => 2000000,
                'gia_ban'           => 2600000,
                'mo_ta'             => 'ÁO PHÔNG BURBERRY NATURAL CHECKED CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO PHÔNG BURBERRY NATURAL CHECKED CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'ÁO PHÔNG BURBERRY NATURAL CHECKED CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO PHÔNG LOUIS VUITTON SHIBORI TIE-DYE',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-phong-louis-vuitton-shibori-tie-dye-chuan-authentic-1.jpg?v=1693912941757',
                'id_chuyen_muc'     => 2,
                'id_thuong_hieu'    => 2,
                'gia_goc'           => 2000000,
                'gia_ban'           => 2800000,
                'mo_ta'             => 'ÁO PHÔNG LOUIS VUITTON SHIBORI TIE-DYE CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO PHÔNG LOUIS VUITTON SHIBORI TIE-DYE CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'ÁO PHÔNG LOUIS VUITTON SHIBORI TIE-DYE CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO SƠ MI LOUIS VUITTON MONOGRAM AQUAGARDEN',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-so-mi-louis-vuitton-monogram-aquagarden-chuan-authentic.jpg?v=1691753519660',
                'id_chuyen_muc'     => 2,
                'id_thuong_hieu'    => 2,
                'gia_goc'           => 2000000,
                'gia_ban'           => 3800000,
                'mo_ta'             => 'ÁO SƠ MI LOUIS VUITTON MONOGRAM AQUAGARDEN CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO SƠ MI LOUIS VUITTON MONOGRAM AQUAGARDEN CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'ÁO SƠ MI LOUIS VUITTON MONOGRAM AQUAGARDEN CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO PHÔNG LOUIS VUITTON MONOGRAM COMICS',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-phong-louis-vuitton-monogram-comics-chuan-authentic-1.jpg?v=1679042870407',
                'id_chuyen_muc'     => 2,
                'id_thuong_hieu'    => 2,
                'gia_goc'           => 2000000,
                'gia_ban'           => 2800000,
                'mo_ta'             => 'ÁO PHÔNG LOUIS VUITTON MONOGRAM COMICS CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO PHÔNG LOUIS VUITTON MONOGRAM COMICS CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'ÁO PHÔNG LOUIS VUITTON MONOGRAM COMICS CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO POLO GUCCI GG NAVY KNIT',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-polo-gucci-gg-navy-knit-chuan-chinh-hang-1.jpg?v=1692779625763',
                'id_chuyen_muc'     => 2,
                'id_thuong_hieu'    => 2,
                'gia_goc'           => 2000000,
                'gia_ban'           => 2800000,
                'mo_ta'             => 'ÁO POLO GUCCI GG NAVY KNIT CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO POLO GUCCI GG NAVY KNIT CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'ÁO POLO GUCCI GG NAVY KNIT CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO POLO LOUIS VUITTON LOGO SIGNATURE',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-polo-louis-vuitton-logo-signature-chuan-chinh-hang-1.jpg?v=1693913706070',
                'id_chuyen_muc'     => 2,
                'id_thuong_hieu'    => 2,
                'gia_goc'           => 2000000,
                'gia_ban'           => 2800000,
                'mo_ta'             => 'ÁO POLO LOUIS VUITTON LOGO SIGNATURE CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO POLO LOUIS VUITTON LOGO SIGNATURE CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'ÁO POLO LOUIS VUITTON LOGO SIGNATURE CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO POLO GUCCI GG STRIPE',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-polo-gucci-gg-stripe-chuan-authentic-1.jpg?v=1669455205927',
                'id_chuyen_muc'     => 2,
                'id_thuong_hieu'    => 2,
                'gia_goc'           => 2400000,
                'gia_ban'           => 2800000,
                'mo_ta'             => 'ÁO POLO GUCCI GG STRIPE CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO POLO GUCCI GG STRIPE CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'ÁO POLO GUCCI GG STRIPE CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO PHÔNG LOUIS VUITTON LV SPREAD EMBROIDERY',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-phong-louis-vuitton-lv-spread-embroidery-chuan-authentic-1-e848d0cf-031b-4b8e-ac3f-35e5432cf246.jpg?v=1691754542833',
                'id_chuyen_muc'     => 2,
                'id_thuong_hieu'    => 2,
                'gia_goc'           => 2400000,
                'gia_ban'           => 2800000,
                'mo_ta'             => 'ÁO PHÔNG LOUIS VUITTON LV SPREAD EMBROIDERY CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO PHÔNG LOUIS VUITTON LV SPREAD EMBROIDERY CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'ÁO PHÔNG LOUIS VUITTON LV SPREAD EMBROIDERY CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],



            //



            [
                'ten_san_pham'      =>'ÁO KHOÁC BURBERRY BROWN CHECKED BOMBER',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-khoac-burberry-brown-checked-bomber-chuan-chinh-hang-1.jpg?v=1696417296357',
                'id_chuyen_muc'     => 1,
                'id_thuong_hieu'    => 3,
                'gia_goc'           => 5000000,
                'gia_ban'           => 5600000,
                'mo_ta'             => 'ÁO KHOÁC BURBERRY BROWN CHECKED BOMBER CHUẨN 1:1 NHƯ HÀNG CHÍNH HÃNG.',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO KHOÁC BURBERRY BROWN CHECKED BOMBER CHUẨN 1:1 NHƯ HÀNG CHÍNH HÃNG.',
                'thong_tin_them'    => 'ÁO KHOÁC BURBERRY BROWN CHECKED BOMBER CHUẨN 1:1 NHƯ HÀNG CHÍNH HÃNG.',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO LEN BURBERRY CHECK PATTERN GREY',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-len-burberry-check-pattern-grey-chuan-chinh-hang-1.jpg?v=1696416962597',
                'id_chuyen_muc'     => 1,
                'id_thuong_hieu'    => 3,
                'gia_goc'           => 3000000,
                'gia_ban'           => 3800000,
                'mo_ta'             => 'ÁO LEN BURBERRY CHECK PATTERN GREY CHUẨN 1:1 NHƯ HÀNG CHÍNH HÃNG.',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO LEN BURBERRY CHECK PATTERN GREY CHUẨN 1:1 NHƯ HÀNG CHÍNH HÃNG.',
                'thong_tin_them'    => 'ÁO LEN BURBERRY CHECK PATTERN GREY CHUẨN 1:1 NHƯ HÀNG CHÍNH HÃNG.',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO LEN DIOR OBLIQUE INSERTS',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-len-len-dior-oblique-inserts-chuan-authentic-1.jpg?v=1696416629890',
                'id_chuyen_muc'     => 1,
                'id_thuong_hieu'    => 3,
                'gia_goc'           => 2500000,
                'gia_ban'           => 3200000,
                'mo_ta'             => 'ÁO LEN DIOR OBLIQUE INSERTS CHUẨN 1:1 NHƯ HÀNG CHÍNH HÃNG.',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO LEN DIOR OBLIQUE INSERTS CHUẨN 1:1 NHƯ HÀNG CHÍNH HÃNG.',
                'thong_tin_them'    => 'ÁO LEN DIOR OBLIQUE INSERTS CHUẨN 1:1 NHƯ HÀNG CHÍNH HÃNG.',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO CARDIGAN THOM BROWNE 4-BAR MILANO STITCH NAVY',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-cardigan-thom-browne-4-bar-milano-stitch-navy-chuan-authentic-1-376ddd8c-2e58-4425-8d7f-45e84117f1cf.jpg?v=1696416210647',
                'id_chuyen_muc'     => 1,
                'id_thuong_hieu'    => 3,
                'gia_goc'           => 3500000,
                'gia_ban'           => 4200000,
                'mo_ta'             => 'ÁO CARDIGAN THOM BROWNE 4-BAR MILANO STITCH NAVY CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO CARDIGAN THOM BROWNE 4-BAR MILANO STITCH NAVY CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'ÁO CARDIGAN THOM BROWNE 4-BAR MILANO STITCH NAVY CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO CARDIGAN THOM BROWNE 4-BAR MILANO STITCH GREY',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-cardigan-thom-browne-4-bar-milano-stitch-grey-chuan-chinh-hang-1.jpg?v=1696416074353',
                'id_chuyen_muc'     => 1,
                'id_thuong_hieu'    => 3,
                'gia_goc'           => 3500000,
                'gia_ban'           => 4200000,
                'mo_ta'             => 'ÁO CARDIGAN THOM BROWNE 4-BAR MILANO STITCH GREY CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO CARDIGAN THOM BROWNE 4-BAR MILANO STITCH GREY CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'ÁO CARDIGAN THOM BROWNE 4-BAR MILANO STITCH GREY CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO SƠ MI THOM BROWNE RWB DETAIL WHITE',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-thom-browne-rwb-detail-white-chuan-authentic-1.jpg?v=1696415858280',
                'id_chuyen_muc'     => 1,
                'id_thuong_hieu'    => 3,
                'gia_goc'           => 2000000,
                'gia_ban'           => 2800000,
                'mo_ta'             => 'ÁO SƠ MI THOM BROWNE RWB DETAIL WHITE CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO SƠ MI THOM BROWNE RWB DETAIL WHITE CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'ÁO SƠ MI THOM BROWNE RWB DETAIL WHITE CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO SƠ MI THOM BROWNE RWB STRIPE WHITE',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-so-mi-thom-browne-rwb-stripe-chuan-authentic-1-04c141b7-ef78-4b66-ae24-33468153d16c.jpg?v=1696415500877',
                'id_chuyen_muc'     => 1,
                'id_thuong_hieu'    => 3,
                'gia_goc'           => 2000000,
                'gia_ban'           => 2800000,
                'mo_ta'             => 'ÁO SƠ MI THOM BROWNE RWB STRIPE CHUẨN 1:1 AUTHENTIC',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO SƠ MI THOM BROWNE RWB STRIPE CHUẨN 1:1 AUTHENTIC',
                'thong_tin_them'    => 'ÁO SƠ MI THOM BROWNE RWB STRIPE CHUẨN 1:1 AUTHENTIC',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'ÁO POLO BURBERRY CHECK-COLLAR BLACK',
                'hinh_anh'          =>'https://bizweb.dktcdn.net/thumb/grande/100/386/444/products/ao-polo-burberry-check-collar-black-chuan-chinh-hang-1.jpg?v=1696415218270',
                'id_chuyen_muc'     => 1,
                'id_thuong_hieu'    => 3,
                'gia_goc'           => 2000000,
                'gia_ban'           => 2600000,
                'mo_ta'             => 'ÁO POLO BURBERRY CHECK-COLLAR BLACK CHUẨN 1:1 GIỐNG CHÍNH HÃNG.',
                'so_luong'          => 0,
                'noi_dung'          => 'ÁO POLO BURBERRY CHECK-COLLAR BLACK CHUẨN 1:1 GIỐNG CHÍNH HÃNG.',
                'thong_tin_them'    => 'ÁO POLO BURBERRY CHECK-COLLAR BLACK CHUẨN 1:1 GIỐNG CHÍNH HÃNG.',
                'tinh_trang'        => 1,
            ],

            //4

            [
                'ten_san_pham'      =>'Điện thoại iPhone 14 Pro 256GB',
                'hinh_anh'          =>'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/289691/iphone-14-pro-vang-thumb-600x600.jpg',
                'id_chuyen_muc'     => 4,
                'id_thuong_hieu'    => 4,
                'gia_goc'           => 25000000,
                'gia_ban'           => 27290000,
                'mo_ta'             => 'Apple trong sự kiện ngày 8/9 đã giới thiệu đến người dùng mẫu iPhone 14 Pro 256GB mang những cải tiến về mặt thiết kế cũng như cấu hình phần cứng',
                'so_luong'          => 0,
                'noi_dung'          => 'Hiệu năng đột phá
                Bộ vi xử lý A16 Bionic được sản xuất trên tiến trình hiện đại cho hiệu năng mạnh mẽ có thể xử lý mọi tác vụ từ nhẹ đến nặng, cân game dễ dàng trong khi vẫn tối ưu và tiết kiệm được điện năng.',
                'thong_tin_them'    => 'Với những cải tiến về mặt thiết kế cũng như hiệu năng mạnh mẽ, camera được nâng cấp nên iPhone 14 Pro 256GB có thể đáp ứng mọi nhu cầu của người dùng, trong mọi tác vụ từ nhẹ nhất đến nặng nhất.',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'Điện thoại iPhone 12 128GB',
                'hinh_anh'          =>'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/228736/iphone-12-violet-1-600x600.jpg',
                'id_chuyen_muc'     => 4,
                'id_thuong_hieu'    => 4,
                'gia_goc'           => 12000000,
                'gia_ban'           => 14490000,
                'mo_ta'             => 'Apple đã trình diện đến người dùng mẫu điện thoại iPhone 12 128GB với sự tuyên bố về một kỷ nguyên mới của iPhone 5G, nâng cấp về màn hình và hiệu năng hứa hẹn đây sẽ là smartphone cao cấp đáng để mọi người đầu tư sở hữu.',
                'so_luong'          => 0,
                'noi_dung'          => 'Hiệu năng đột phá
                Bộ vi xử lý A16 Bionic được sản xuất trên tiến trình hiện đại cho hiệu năng mạnh mẽ có thể xử lý mọi tác vụ từ nhẹ đến nặng, cân game dễ dàng trong khi vẫn tối ưu và tiết kiệm được điện năng.',
                'thong_tin_them'    => 'Với những cải tiến về mặt thiết kế cũng như hiệu năng mạnh mẽ, camera được nâng cấp nên iPhone 14 Pro 256GB có thể đáp ứng mọi nhu cầu của người dùng, trong mọi tác vụ từ nhẹ nhất đến nặng nhất.',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'Điện thoại iPhone 15 Pro 128GB ',
                'hinh_anh'          =>'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/299033/iphone-15-pro-blue-thumbnew-600x600.jpg',
                'id_chuyen_muc'     => 4,
                'id_thuong_hieu'    => 4,
                'gia_goc'           => 20000000,
                'gia_ban'           => 27990000,
                'mo_ta'             => 'Apple đã trình diện đến người dùng mẫu điện thoại  iPhone 15 Pro 128GB với sự tuyên bố về một kỷ nguyên mới của iPhone 5G, nâng cấp về màn hình và hiệu năng hứa hẹn đây sẽ là smartphone cao cấp đáng để mọi người đầu tư sở hữu.',
                'so_luong'          => 0,
                'noi_dung'          => 'Hiệu năng đột phá
                Bộ vi xử lý A16 Bionic được sản xuất trên tiến trình hiện đại cho hiệu năng mạnh mẽ có thể xử lý mọi tác vụ từ nhẹ đến nặng, cân game dễ dàng trong khi vẫn tối ưu và tiết kiệm được điện năng.',
                'thong_tin_them'    => 'Với những cải tiến về mặt thiết kế cũng như hiệu năng mạnh mẽ, camera được nâng cấp nên iPhone 14 Pro 256GB có thể đáp ứng mọi nhu cầu của người dùng, trong mọi tác vụ từ nhẹ nhất đến nặng nhất.',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'Điện thoại iPhone 15 Pro Max 256GB',
                'hinh_anh'          =>'https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-gold-thumbnew-600x600.jpg',
                'id_chuyen_muc'     => 4,
                'id_thuong_hieu'    => 4,
                'gia_goc'           => 25000000,
                'gia_ban'           => 34990000,
                'mo_ta'             => 'Apple đã trình diện đến người dùng mẫu điện thoại iPhone 15 Pro Max 256GB với sự tuyên bố về một kỷ nguyên mới của iPhone 5G, nâng cấp về màn hình và hiệu năng hứa hẹn đây sẽ là smartphone cao cấp đáng để mọi người đầu tư sở hữu.',
                'so_luong'          => 0,
                'noi_dung'          => 'Hiệu năng đột phá
                Bộ vi xử lý A16 Bionic được sản xuất trên tiến trình hiện đại cho hiệu năng mạnh mẽ có thể xử lý mọi tác vụ từ nhẹ đến nặng, cân game dễ dàng trong khi vẫn tối ưu và tiết kiệm được điện năng.',
                'thong_tin_them'    => 'Với những cải tiến về mặt thiết kế cũng như hiệu năng mạnh mẽ, camera được nâng cấp nên iPhone 14 Pro 256GB có thể đáp ứng mọi nhu cầu của người dùng, trong mọi tác vụ từ nhẹ nhất đến nặng nhất.',
                'tinh_trang'        => 1,
            ],

            //5

            [
                'ten_san_pham'      =>'Áo Thun Nam MTF020-2',
                'hinh_anh'          =>'https://savani.vn/images/image/2022/11/14/large/ao-thun-nam-MTF020-2-N5040-1.jpg',
                'id_chuyen_muc'     => 5,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 380000,
                'gia_ban'           => 199000,
                'mo_ta'             => 'Chất vải mềm mịn, Co giãn nhẹ, thấm hút tốt',
                'so_luong'          => 0,
                'noi_dung'          => 'Chất vải mềm mịn, Co giãn nhẹ, thấm hút tốt',
                'thong_tin_them'    => 'Chất vải mềm mịn, Co giãn nhẹ, thấm hút tốt',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'Áo Thun Nam Cổ Tim MLT002-2',
                'hinh_anh'          =>'https://savani.vn/images/image/2022/12/07/large/ao-thun-nam-MLT002-2-W0507-1.jpg',
                'id_chuyen_muc'     => 5,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 380000,
                'gia_ban'           => 199000,
                'mo_ta'             => 'Chất vải mềm mịn, Co giãn nhẹ, thấm hút tốt',
                'so_luong'          => 0,
                'noi_dung'          => 'Chất vải mềm mịn, Co giãn nhẹ, thấm hút tốt',
                'thong_tin_them'    => 'Chất vải mềm mịn, Co giãn nhẹ, thấm hút tốt',
                'tinh_trang'        => 1,
            ],

            //7

            [
                'ten_san_pham'      =>'Laptop HP 15s fq2716TU i3 1115G4/8GB/512GB/Win11 (7C0X3PA)',
                'hinh_anh'          =>'https://cdn.tgdd.vn/Products/Images/44/301634/hp-15s-fq2716tu-i3-7c0x3pa-thumb-600x600.jpg',
                'id_chuyen_muc'     => 7,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 13690000,
                'gia_ban'           => 10190000,
                'mo_ta'             => ' Bộ vi xử lý Intel Core i3 1115G4 đi kèm card tích hợp Intel UHD Graphics cho hiệu năng ổn định, mạnh mẽ trong khi vẫn tối ưu được mức điện năng tiêu thụ, dễ dàng cân trọn mọi tác vụ từ văn phòng với Word, Excel, PowerPoint,',
                'so_luong'          => 0,
                'noi_dung'          => '• Laptop được trang bị một thanh RAM DDR4 8 GB hỗ trợ đa nhiệm trơn tru,',
                'thong_tin_them'    => 'Laptop HP sở hữu màn hình 15.6 inch hỗ trợ độ phân giải Full HD (1920 x 1080) cùng công nghệ chống chói Anti Glare và độ sáng 250 nits, hứa hẹn mang đến cho người dùng trải nghiệm xem đã mắt',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'Laptop Asus Vivobook X415EA i3 1115G4/8GB/256GB/Win11 (EK2034W)',
                'hinh_anh'          =>'https://cdn.tgdd.vn/Products/Images/44/304866/asus-vivobook-x415ea-i3-ek2034w-thumb-laptop-600x600.jpg',
                'id_chuyen_muc'     => 7,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 10000000,
                'gia_ban'           => 9190000,
                'mo_ta'             => ' Bộ vi xử lý Intel Core i3 1115G4 đi kèm card tích hợp Intel UHD Graphics cho hiệu năng ổn định, mạnh mẽ trong khi vẫn tối ưu được mức điện năng tiêu thụ, dễ dàng cân trọn mọi tác vụ từ văn phòng với Word, Excel, PowerPoint,',
                'so_luong'          => 0,
                'noi_dung'          => '• Laptop được trang bị một thanh RAM DDR4 8 GB hỗ trợ đa nhiệm trơn tru, bạn có thể mở cùng lúc nhiều tabs Chrome mà không lo máy bị tràn RAM gây giật lag. Kết hợp cùng ổ cứng SSD 512 GB nâng cao tốc độ truy xuất dữ liệu,',
                'thong_tin_them'    => 'Laptop HP sở hữu màn hình 15.6 inch hỗ trợ độ phân giải Full HD (1920 x 1080) cùng công nghệ chống chói Anti Glare và độ sáng 250 nits, hứa hẹn mang đến cho người dùng trải nghiệm xem đã mắt',
                'tinh_trang'        => 1,
            ],

            //8

            [
                'ten_san_pham'      =>'Đồng hồ thông minh Apple Watch S8 LTE 41mm',
                'hinh_anh'          =>'https://cdn.tgdd.vn/Products/Images/7077/289832/apple-watch-s8-lte-41mm-vien-thep-trang-tn-600x600.jpg',
                'id_chuyen_muc'     => 8,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 20990000,
                'gia_ban'           => 16490000,
                'mo_ta'             => 'Bộ vi xử lý Intel Core i3 1115G4 đi kèm card tích hợp Intel UHD Graphics cho hiệu năng ổn định, mạnh mẽ trong khi vẫn tối ưu được mức điện năng tiêu thụ, dễ dàng cân trọn mọi tác vụ từ văn phòng với Word, Excel, PowerPoint,',
                'so_luong'          => 0,
                'noi_dung'          => '• Laptop được trang bị một thanh RAM DDR4 8 GB hỗ trợ đa nhiệm trơn tru, bạn có thể mở cùng lúc nhiều tabs Chrome mà không lo máy bị tràn RAM gây giật lag. Kết hợp cùng ổ cứng SSD 512 GB nâng cao tốc độ truy xuất dữ liệu',
                'thong_tin_them'    => 'Laptop HP sở hữu màn hình 15.6 inch hỗ trợ độ phân giải Full HD (1920 x 1080) cùng công nghệ chống chói Anti Glare và độ sáng 250 nits, hứa hẹn mang đến cho người dùng trải nghiệm xem đã mắt',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'Tai nghe Bluetooth AirPods 2 Lightning Charge Apple MV7N2',
                'hinh_anh'          =>'https://cdn.tgdd.vn/Products/Images/54/236016/tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-200923-112201-600x600.jpg',
                'id_chuyen_muc'     => 8,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 3490000,
                'gia_ban'           => 2650000,
                'mo_ta'             => 'Đầu tiên, nhắc đến điểm cải tiến đáng "ăn tiền" nhất trên chiếc tai nghe này chính là AirPods 2 được tích hợp chip xử lý H1 thế hệ mới cho thời gian chuyển đổi kết nối giữa các thiết bị nhanh hơn gấp 2 lần so với phiên bản cũ.',
                'so_luong'          => 0,
                'noi_dung'          => 'Đồng thời, trang bị công nghệ Bluetooth 5.0 cho kết nối nhanh chóng, ổn định, độ trễ ít, AirPods 2 cho tốc độ kết nối tới cuộc gọi thoại nhanh gấp 1.5 lần so với bình thường, giảm độ trễ âm thanh khi gọi thoại, chơi game.',
                'thong_tin_them'    => 'Tiếp theo, một trong những lý do khiến nhiều người dùng vẫn luôn “săn đón" chiếc tai nghe này là khả năng đàm thoại với mic khử tiếng ồn tốt, đem đến một chất âm sạch, trong trẻo dễ nghe.',
                'tinh_trang'        => 1,
            ],

            [
                'ten_san_pham'      =>'Đồng hồ thông minh Apple Watch SE 2023 44mm viền nhôm dây silicone',
                'hinh_anh'          =>'https://cdn.tgdd.vn/Products/Images/7077/316012/apple-watch-se-2023-44mm-vien-nhom-day-silicone-xanh-den-thumb-1-600x600.jpg',
                'id_chuyen_muc'     => 8,
                'id_thuong_hieu'    => 1,
                'gia_goc'           => 7190000,
                'gia_ban'           => 6190000,
                'mo_ta'             => 'Đầu tiên, nhắc đến điểm cải tiến đáng "ăn tiền" nhất trên chiếc tai nghe này chính là AirPods 2 được tích hợp chip xử lý H1 thế hệ mới cho thời gian chuyển đổi kết nối giữa các thiết bị nhanh hơn gấp 2 lần so với phiên bản cũ.',
                'so_luong'          => 0,
                'noi_dung'          => 'Đồng thời, trang bị công nghệ Bluetooth 5.0 cho kết nối nhanh chóng, ổn định, độ trễ ít, AirPods 2 cho tốc độ kết nối tới cuộc gọi thoại nhanh gấp 1.5 lần so với bình thường, giảm độ trễ âm thanh khi gọi thoại',
                'thong_tin_them'    => 'Tiếp theo, một trong những lý do khiến nhiều người dùng vẫn luôn “săn đón" chiếc tai nghe này là khả năng đàm thoại với mic khử tiếng ồn tốt, đem đến một chất âm sạch, trong trẻo dễ nghe.',
                'tinh_trang'        => 1,
            ],
        ]);
    }
}
