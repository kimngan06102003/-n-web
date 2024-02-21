<?php

namespace App\Http\Controllers;

use App\Models\BinhLuanModels;
use Illuminate\Http\Request;

class BinhLuanController extends Controller
{
    public function DanhSachBinhLuan()
    {
        $dsBinhLuan=BinhLuanModels::all();
        return view('BackEnd.quan-li-binh-luan.index',compact('dsBinhLuan'));
    }
    public function Xoa($id)
    {
        $binhluan = BinhLuanModels::find($id);      
        $binhluan->delete();
        return redirect()->route('BackEnd.quan-li-binh-luan.index');
    }   
    
}
