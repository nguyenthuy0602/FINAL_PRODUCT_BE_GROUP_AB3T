<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ma_giam_gias', function (Blueprint $table) {
            $table->id();
            $table->integer('so_tien_giam');
            $table->integer('phan_tram_giam');
            $table->integer('tinh_trang');
            $table->integer('id_don_hang')->default(0);
            $table->string('code_giam_gia');
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
        Schema::dropIfExists('ma_giam_gias');
    }
};
