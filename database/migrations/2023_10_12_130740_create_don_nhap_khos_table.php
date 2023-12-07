<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('don_nhap_khos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_nha_cung_cap');
            $table->integer('tong_tien')->default(0);
            $table->longText('ghi_chu');
            $table->string('ma_phieu_nhap_kho');
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
        Schema::dropIfExists('don_nhap_khos');
    }
};
