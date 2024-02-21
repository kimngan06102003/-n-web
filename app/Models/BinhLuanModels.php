<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuanModels extends Model
{
    use HasFactory;
    protected $table="danh_gia";
    public function khach_hang()
    {
        return $this->belongsTo(KhachHangModels::class);
    }   
}
