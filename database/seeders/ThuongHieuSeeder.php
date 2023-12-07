<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThuongHieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thuong_hieus')->delete();

        // Reset id về lại 1
        DB::table('thuong_hieus')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('thuong_hieus')->insert([
            [
                'ten_thuong_hieu'       => "LOUIS VUITTON",
                'icon_thuong_hieu'      => "https://static.vecteezy.com/system/resources/previews/021/059/823/original/louis-vuitton-logo-louis-vuitton-icon-on-black-background-free-vector.jpg",
                'url_thuong_hieu'       => "/louis-vuitton",
                'tinh_trang'            => 1,
            ],

            [
                'ten_thuong_hieu'       => "BURBERRY",
                'icon_thuong_hieu'      => "https://customisation.club/cdn/shop/products/Burberry-Riccardo-Tisci-Logo_72f41c96-0864-4f2a-9263-af2f45742b27_3840x.jpg?v=1682789989",
                'url_thuong_hieu'       => "/burberry",
                'tinh_trang'            => 1,
            ],

            [
                'ten_thuong_hieu'       => "Gucci",
                'icon_thuong_hieu'      => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/1960s_Gucci_Logo.svg/2560px-1960s_Gucci_Logo.svg.png",
                'url_thuong_hieu'       => "/gucci",
                'tinh_trang'            => 1,
            ],

            [
                'ten_thuong_hieu'       => "Apple",
                'icon_thuong_hieu'      => "https://e7.pngegg.com/pngimages/980/413/png-clipart-apple-logo-business-iphone-apple-heart-computer.png",
                'url_thuong_hieu'       => "/apple",
                'tinh_trang'            => 1,
            ],

        ]);
    }
}
