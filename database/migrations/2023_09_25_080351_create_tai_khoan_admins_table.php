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
        Schema::create('tai_khoan_admins', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->string('ho_lot');
            $table->string('ten_admin');
            $table->string('ngay_sinh');
            $table->string('so_dien_thoai');
            $table->string('dia_chi');
            $table->integer('id_phan_quyen');
            $table->integer('trang_thai');
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
        Schema::dropIfExists('tai_khoan_admins');
    }
};
