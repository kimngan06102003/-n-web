<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHangModels extends Model
{
    use HasFactory;
    protected $table="chi_tiet_don_hang";
    public function don_hang()
    {
        return $this->belongsTo(DonHangModels::class);
    }
    public function san_pham()
    {
        return $this->belongsToMany(SanPhamModels::class);
    }
}
