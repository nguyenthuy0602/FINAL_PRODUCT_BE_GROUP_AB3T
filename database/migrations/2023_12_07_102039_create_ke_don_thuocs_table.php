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
        Schema::create('ke_don_thuocs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_benh_nhan');
            $table->string('gioi_tinh');
            $table->string('ten_bac_si');
            $table->string('so_dien_thoai');
            $table->string('chan_doan');
            $table->string('ten_thuoc');
            $table->string('chuyen_mon');
            $table->string('so_luong');
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
        Schema::dropIfExists('ke_don_thuocs');
    }
};
