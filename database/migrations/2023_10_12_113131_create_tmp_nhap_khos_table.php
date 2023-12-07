<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('tmp_nhap_khos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_san_pham');
            $table->string('ten_san_pham');
            $table->integer('so_luong_nhap')->default(1);
            $table->integer('don_gia_nhap')->default(0);
            $table->integer('thanh_tien_nhap')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tmp_nhap_khos');
    }
};
