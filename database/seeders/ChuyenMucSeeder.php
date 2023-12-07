<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChuyenMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chuyen_mucs')->delete();

        // Reset id về lại 1
        DB::table('chuyen_mucs')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('chuyen_mucs')->insert([
            [
                'ten_chuyen_muc' => 'Sản Phẩm Mới',
                'icon_chuyen_muc'=> '<i class="fa-solid fa-list"></i>',
                'url_chuyen_muc' =>'/san-pham-moi',
                'tinh_trang'     => 1,
            ],

            [
                'ten_chuyen_muc' => 'Sản Phẩm Nổi Bật',
                'icon_chuyen_muc'=> '<i class="fa-regular fa-rectangle-list"></i>',
                'url_chuyen_muc' =>'/san-pham-chuyen-muc',
                'tinh_trang'     => 1,
            ],

            [
                'ten_chuyen_muc' => 'Túi Balo',
                'icon_chuyen_muc'=> '<i class="fa-solid fa-clipboard-list"></i>',
                'url_chuyen_muc' =>'/tui-balo',
                'tinh_trang'     => 1,
            ],


        ]);
    }
}
