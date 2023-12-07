<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('thuong_hieus', function (Blueprint $table) {
            $table->id();
            $table->string('ten_thuong_hieu');
            $table->string('url_thuong_hieu');
            $table->string('icon_thuong_hieu');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('thuong_hieus');
    }
};
