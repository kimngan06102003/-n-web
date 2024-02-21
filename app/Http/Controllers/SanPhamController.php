<?php

namespace App\Http\Controllers;
use App\Models\DanhMucSanPhamModels;
use App\Models\NhaCungCapModels;
use App\Models\SanPhamModels;

use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function DanhSachSanPham()
    {
        $dsSanPham=SanPhamModels::all();
        return view('BackEnd.quan-li-san-pham.index',compact('dsSanPham'));
    }
    public function ThemMoi()
    {
        $dsDanhMuc=DanhMucSanPhamModels::all();
        $dsNhaCungCap=NhaCungCapModels::all();
        return view('BackEnd.quan-li-san-pham.them-moi',compact('dsDanhMuc','dsNhaCungCap'));
    }
    
    public function XuLyThemMoi(Request $request)
    {
        $sanPham = new SanPhamModels();
        $sanPham->ten_san_pham = $request->ten_san_pham;
        if ($request->hasFile('anh_san_pham')) {
            $file = $request->file('anh_san_pham');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('anh'), $filename);
            $sanPham->anh_san_pham = $filename;
        }
        $sanPham->gia = $request->gia;
        $sanPham->so_luong= $request->so_luong;
        $sanPham->kich_thuoc=$request->kich_thuoc;
        $sanPham->trong_luong=$request->trong_luong;
        $sanPham->mau_sac=$request->mau_sac;
        $sanPham->am_thanh=$request->am_thanh;
        $sanPham->bo_nho=$request->bo_nho;
        $sanPham->he_dieu_hanh=$request-> he_dieu_hanh;
        $sanPham->camera=$request->camera;
        $sanPham->pin=$request->pin;
        $sanPham->bao_hanh=$request->bao_hanh;
        $sanPham->cong_ket_noi=$request->cong_ket_noi;  
        $sanPham->danh_muc_san_pham_id = $request->danh_muc_san_pham_id;
        $sanPham->nha_cung_cap_id  = $request->nha_cung_cap_id;
        $sanPham->save();
        return redirect()->route('BackEnd.quan-li-san-pham.index');
    }
    
    public function CapNhat($id)
    {
        $dsDanhMuc=DanhMucSanPhamModels::all();
        $dsNhaCungCap=NhaCungCapModels::all();
        $sanpham = SanPhamModels::find($id);
        return view('BackEnd.quan-li-san-pham.cap-nhat', compact('sanpham', 'dsDanhMuc','dsNhaCungCap'));
    }

    public function XuLyCapNhat(Request $request, $id)
    {
        $sanPham = SanPhamModels::find($id);             
        $sanPham->ten_san_pham = $request->ten_san_pham;
        if ($request->hasFile('anh_san_pham')) {
            $file = $request->file('anh_san_pham');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $sanPham->anh_san_pham = $filename;
        }
        $sanPham->gia = $request->gia;
        $sanPham->so_luong= $request->so_luong;
        $sanPham->kich_thuoc=$request->kich_thuoc;
        $sanPham->trong_luong=$request->trong_luong;
        $sanPham->mau_sac=$request->mau_sac;
        $sanPham->am_thanh=$request->am_thanh;
        $sanPham->bo_nho=$request->bo_nho;
        $sanPham->he_dieu_hanh=$request-> he_dieu_hanh;
        $sanPham->camera=$request->camera;
        $sanPham->pin=$request->pin;
        $sanPham->bao_hanh=$request->bao_hanh;
        $sanPham->cong_ket_noi=$request->cong_ket_noi;  
        $sanPham->danh_muc_san_pham_id = $request->danh_muc_san_pham;
        $sanPham->nha_cung_cap_id  = $request->nha_cung_cap;
        $sanPham->save();

        return redirect()->route('BackEnd.quan-li-san-pham.index');

    }

    public function Xoa($id)
    {
        $sanPham = SanPhamModels::find($id);
        if (empty($sanPham)) {
            return "Sản phẩm không tồn tại";
        }        
        $sanPham->delete();
        return redirect()->route('BackEnd.quan-li-san-pham.index');
    }
    
}
