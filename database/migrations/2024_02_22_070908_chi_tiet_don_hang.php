<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('chi_tiet_don_hang', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('don_hang_id');
            $table->unsignedInteger('san_pham_id');
            $table->integer('so_luong_mua');
            //khoá ngoại
            $table->timestamps();
            $table->foreign('don_hang_id')->references('id')->on('don_hang')->onDelete('cascade');
            $table->foreign('san_pham_id')->references('id')->on('san_pham')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('chi_tiet_don_hang');

    }
};
