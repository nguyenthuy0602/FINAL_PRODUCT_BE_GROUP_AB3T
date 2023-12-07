<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->text('hinh_anh');
            $table->integer('id_chuyen_muc');
            $table->integer('gia_goc');
            $table->integer('gia_ban');
            $table->string('mo_ta');
            $table->integer('so_luong')->default(0);
            $table->string('noi_dung');
            $table->string('thong_tin_them');
            $table->integer('id_thuong_hieu');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_phams');
    }
};
