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
        Schema::create('chi_tiet_don_hang', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('khach_hang_id');
            $table->unsignedInteger('nhan_vien_id');
            $table->unsignedInteger('tinh_trang_don_hang_id');
            $table->dateTime('ngay_dat');
            $table->string('dia_diem_giao_hang');
            $table->decimal('tong_tien',10,2);
            $table->timestamps();
            //khoá ngoại
            $table->foreign('nhan_vien_id')->references('id')->on('nhan_vien')->onDelete('cascade');
            $table->foreign('khach_hang_id')->references('id')->on('khach_hang')->onDelete('cascade');
            $table->foreign('tinh_trang_don_hang_id')->references('id')->on('tinh_trang_don_hang')->onDelete('cascade');

        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('don_hang');

    }
};
