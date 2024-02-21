<?php

namespace App\Http\Controllers;

use App\Models\NhanVienModels;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function DanhSachNhanVien()
    {
        $dsNhanVien=NhanVienModels::all();
        return view('BackEnd.quan-li-nhan-vien.index',compact('dsNhanVien'));
    }
    public function ThemMoi()
    {
        $dsNhanVien=NhanVienModels::all();
        return view('BackEnd.quan-li-nhan-vien.them-moi',compact('dsNhanVien'));

    }
    
    public function XuLyThemMoi(Request $request)
    {
        $nhanvien = new NhanVienModels();
        $validatedData = $request->validate([
            'ten_nhan_vien' => 'required',
            'so_dien_thoai'=>'required'
        ]);
        $nhanvien->ten_nhan_vien=$request->ten_nhan_vien;
        $nhanvien->so_dien_thoai=$request->so_dien_thoai;
        $nhanvien->save();
        return redirect()->route('BackEnd.quan-li-nhan-vien.index');
    }
    
    public function CapNhat($id)
    {
        $nhanvien=NhanVienModels::find($id);
        return view('BackEnd.quan-li-nhan-vien.cap-nhat ',compact('nhanvien'));
    }

    public function XuLyCapNhat(Request $request, $id)
    {
        $nhanvien = NhanVienModels::find($id);
        $validatedData = $request->validate([
            'ten_nhan_vien' => 'required',
            'so_dien_thoai'=>'required'
        ]);
               
        $nhanvien->ten_nhan_vien=$request->ten_nhan_vien;
        $nhanvien->so_dien_thoai=$request->so_dien_thoai;
        $nhanvien->save();
        return redirect()->route('BackEnd.quan-li-nhan-vien.index');
    }

    public function Xoa($id)
    {
        $nhanvien = NhanVienModels::find($id);       
        $nhanvien->delete();
        return redirect()->route('BackEnd.quan-li-nhan-vien.index');
    }
}
