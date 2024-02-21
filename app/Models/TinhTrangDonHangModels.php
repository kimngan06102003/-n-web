<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinhTrangDonHangModels extends Model
{
    use HasFactory;
    protected $table="tinh_trang_don_hang";
    public function don_hang()
    {
        return $this->hasMany(DonHangModels::class);
    }
}
