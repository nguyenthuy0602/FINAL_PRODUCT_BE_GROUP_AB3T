<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('chi_tiet_nhap_khos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_san_pham');
            $table->string('ten_san_pham');
            $table->integer('so_luong_nhap');
            $table->integer('don_gia_nhap')->default(0);
            $table->integer('thanh_tien_nhap')->default(0);
            $table->integer('id_don_nhap_kho');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chi_tiet_nhap_khos');
    }
};
