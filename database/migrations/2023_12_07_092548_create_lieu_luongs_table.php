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
        Schema::create('lieu_luongs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_thuoc');
            $table->string('so_luong');
            $table->string('tan_suat_dung');
            $table->string('so_ngay_dung');
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
        Schema::dropIfExists('lieu_luongs');
    }
};
