<?php

namespace App\Http\Controllers;

use App\Models\KhachHangModels;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function DanhSachKhachHang()
    {
        $dsKhachHang=KhachHangModels::all();
        return view('quan-li-khach-hang.index',compact('dsKhachHang'));
    }
    public function ThemMoi()
    {
        $dsKhachHang=KhachHangModels::all();
        return view('quan-li-khach-hang.them-moi',compact('dsKhachHang'));
    }
    
    public function XuLyThemMoi(Request $request)
    {
        $khachhang = new KhachHangModels();

        $khachhang->ten_khach_hang=$request->ten_khach_hang ;
        $khachhang->email=$request->email;
        $khachhang->dia_chi=$request->dia_chi;
        $khachhang->so_dien_thoai=$request->so_dien_thoai;
        $khachhang->save();
        return redirect()->route('quan-li-khach-hang.index');
    }
    
    public function CapNhat($id)
    {
        $khachhang=KhachHangModels::find($id);
        return view('quan-li-khach-hang.cap-nhat', compact('khachhang'));
    }

    public function XuLyCapNhat(Request $request, $id)
    {
        $khachhang = KhachHangModels::find($id);
 
        $khachhang->ten_khach_hang=$request->ten_khach_hang;
        $khachhang->email=$request->email;
        $khachhang->dia_chi=$request->dia_chi;
        $khachhang->so_dien_thoai=$request->so_dien_thoai;
        $khachhang->save();

        return redirect()->route('quan-li-khach-hang.index');
    }
 
    public function Xoa($id)
    {
        $khachhang = KhachHangModels::find($id);
        if (empty($khachhang)) {
            return "Thông tin khách hàng không tồn tại";
        }        
        $khachhang->delete();
        return "Xóa thông tin khách hàng thành công";
    }
}
