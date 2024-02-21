<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHangModels extends Model
{
    use HasFactory;
    protected $table="don_hang";
    public function khach_hang()
    {
        return $this->belongsTo(KhachHangModels::class);
    }
    public function nhan_vien()
    {
        return $this->belongsTo(NhanVienModels::class);
    }
    public function tinh_trang_don_hang()
    {
        return $this->belongsTo(TinhTrangDonHangModels::class);
    }
    public function chi_tiet_don_hang()
    {
        return $this->belongsTo(ChiTietDonHangModels::class);
    }

}
