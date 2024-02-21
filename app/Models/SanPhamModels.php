<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NhaCungCapModels;

class SanPhamModels extends Model
{
    use HasFactory;
    protected $table = "san_pham";

    protected $fillable = [
        'ten_san_pham',
        'anh_san_pham',
        'gia',
        'so_luong',
        'kich_thuoc',
        'trong_luong',
        'mau_sac',
        'am_thanh',
        'bo_nho',
        'he_dieu_hanh',
        'camera',
        'pin',
        'bao_hanh',
        'cong_ket_noi',
        'danh_muc_san_pham_id',
        'nha_cung_cap_id'
    ];

    public function nha_cung_cap()
    {
        return $this->belongsTo(NhaCungCapModels::class);
    }

    public function danh_muc_san_pham()
    {
        return $this->belongsTo(DanhMucSanPhamModels::class);
    }
    public function don_hang()
    {
        return $this->belongsToMany(SanPhamModels::class);
    }

}

