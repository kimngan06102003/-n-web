<?php

namespace App\Http\Controllers;

use App\Models\AdminModels;
use Illuminate\Http\Request;

class AdminController extends Controller
{  
    public function DanhSachAdmin()
    {
        $dsAdmin=AdminModels::all();
        return view('BackEnd.quan-li-tai-khoan-admin.index',compact('dsAdmin'));
    }
    public function CapNhat($id)
    {
        $admin=AdminModels::find($id);
        if (empty($admin)) 
        {
            return "Tài khoản không tồn tại";
        }
        return view('BackEnd.quan-li-tai-khoan-admin.cap-nhat', compact('admin'));
    }

    public function XuLyCapNhat(Request $request, $id)
    {
        $admin = AdminModels::find($id);
        if (empty($admin)) {
            return "Tài khoản admin không tồn tại";
        }        
        $admin->ten_dang_nhap=$request->ten_dang_nhap;
        $admin->mat_khau=$request->mat_khau;
        $admin->save();

        return redirect()->route('BackEnd.quan-li-tai-khoan-admin.index');
    }

    public function Xoa($id)
    {
        $admin = AdminModels::find($id);
        if (empty($admin)) {
            return "Tài khoản admin không tồn tại";
        }        
        $admin->delete();
        return redirect()->route('BackEnd.quan-li-tai-khoan-admin.index');
    }
}
