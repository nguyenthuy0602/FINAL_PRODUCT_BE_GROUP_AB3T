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
        Schema::create('chuyen_mucs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_chuyen_muc');
            $table->string('icon_chuyen_muc');
            $table->string('url_chuyen_muc');
            $table->string('tinh_trang')->default(1);
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
        Schema::dropIfExists('chuyen_mucs');
    }
};
