<?php

namespace App\Http\Controllers;

use App\Models\DanhMucSanPhamModels;
use Illuminate\Http\Request;

class DanhMucSanPhamController extends Controller
{
    public function DanhMucSanPham()
    {
        $dsDanhMuc=DanhMucSanPhamModels::all();
        return view('quan-li-danh-muc-san-pham.index',compact('dsDanhMuc'));
    }
    public function ThemMoi()
    {
        $dsDanhMuc=DanhMucSanPhamModels::all();
        return view('quan-li-danh-muc-san-pham.them-moi',compact('dsDanhMuc'));

    }
    
    public function XuLyThemMoi(Request $request)
    {
        $validatedData = $request->validate([
            'ten_danh_muc' => 'required|string',
        ]);
        
        $danhmuc = new DanhMucSanPhamModels();
        $danhmuc->ten_danh_muc=$request->ten_danh_muc;
        $danhmuc->save();
        return redirect()->route('quan-li-danh-muc-san-pham.index');
    }
    
    public function CapNhat($id)
    {
        $danhmuc=DanhMucSanPhamModels::find($id);
        return view('quan-li-danh-muc-san-pham.cap-nhat', compact('danhmuc'));
    }

    public function XuLyCapNhat(Request $request, $id)
    {
        $danhmuc = DanhMucSanPhamModels::find($id);

        $validatedData = $request->validate([
            'ten_danh_muc' => 'required'
        ]);
         // Cập nhật ten_danh_muc
        $danhmuc->ten_danh_muc = $request->ten_danh_muc;
        $danhmuc->save();

        return redirect()->route('quan-li-danh-muc-san-pham.index');
    }

    public function Xoa($id)
    {
        $danhmuc = DanhMucSanPhamModels::find($id);
        $danhmuc->delete();
        return redirect()->route('quan-li-danh-muc-san-pham.index');
    }

}
