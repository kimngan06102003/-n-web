<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHangModels extends Model
{
    use HasFactory;
    protected $table="khach_hang";
    protected $fillable = [
        'ten_khach_hang',
        'email',
        'dia_chi',
        'so_dien_thoai',
    ];
    public function binh_luan()
    {
        return $this->hasMany(BinhLuanModels::class);
    }
    public function don_hang()
    {
        return $this->hasMany(KhachHangModels::class);
    }
}
