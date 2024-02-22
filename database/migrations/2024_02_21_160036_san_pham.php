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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->string('anh_san_pham');
            $table->integer('gia');
            $table->integer('so_luong');
            $table->string('kich_thuoc');
            $table->string('trong_luong');
            $table->string('mau_sac');
            $table->string('am_thanh');
            $table->string('bo_nho');
            $table->string('he_dieu_hanh');
            $table->string('camera');
            $table->string('pin');
            $table->string('bao_hanh');
            $table->string('cong_ket_noi');
            $table->unsignedInteger('nha_cung_cap_id');
            $table->unsignedInteger('danh_muc_san_pham_id');
            $table->timestamps();
            //khoá ngoại
            $table->foreign('danh_muc_san_pham_id')->references('id')->on('danh_muc_san_pham');
            $table->foreign('nha_cung_cap_id')->references('id')->on('nha_cung_cap');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_pham');
    }
};
