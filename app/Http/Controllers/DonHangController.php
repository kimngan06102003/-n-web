<?php

namespace App\Http\Controllers;

use App\Models\DonHangModels;
use App\Models\KhachHangModels;
use App\Models\NhanVienModels;
use App\Models\SanPhamModels;
use App\Models\TinhTrangDonHangModels;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    public function DanhSachDonHang()
    {
        $dsDonHang = DonHangModels::all();
        return view('quan-li-don-hang.index', compact('dsDonHang'));
    }

    public function ThemMoi()
    {
        $dsNhanVien = NhanVienModels::all();
        $dsSanPham = SanPhamModels::all();
        $dsTinhTrangDonHang = TinhTrangDonHangModels::all();
        return view('quan-li-don-hang.them-moi', compact('dsNhanVien', 'dsSanPham', 'dsTinhTrangDonHang'));
    }

    public function XuLyThemMoi(Request $request)
    {
        // Kiểm tra và tìm khách hàng theo số điện thoại hoặc tạo mới
        $khachHang = KhachHangModels::firstOrCreate(
            ['so_dien_thoai' => $request->so_dien_thoai],
            [
                'ten_khach_hang' => $request->ten_khach_hang,
                'dia_chi' => $request->dia_chi,
                'email' => $request->email,
            ]
        );

        // Tạo đơn hàng mới
        $donHang = new DonHangModels();
        $donHang->khach_hang_id = $khachHang->id;
        $donHang->nhan_vien_id = $request->nhan_vien_id;
        $donHang->san_pham_id = $request->san_pham_id;
        $donHang->so_luong = $request->so_luong;
        $donHang->don_gia = $request->don_gia;
        $donHang->tong_tien = $request->so_luong * $request->don_gia;
        $donHang->dia_chi_nhan_hang = $khachHang->dia_chi;
        $donHang->tinh_trang_don_hang_id = $request->tinh_trang_don_hang_id;
        $donHang->save();

        return redirect()->route('quan-li-don-hang.index');
    }

    public function CapNhat($id)
    {
        $donHang = DonHangModels::find($id);
        if (empty($donHang)) {
            return "Đơn hàng không tồn tại";
        }
        return view('quan-li-don-hang.cap-nhat', compact('donHang'));
    }

    public function XuLyCapNhat(Request $request, $id)
    {
        $donHang = DonHangModels::find($id);
        if (empty($donHang)) {
            return "Đơn hàng không tồn tại";
        }

        // Tìm hoặc tạo khách hàng mới
        $khachHang = KhachHangModels::firstOrCreate(
            ['so_dien_thoai' => $request->so_dien_thoai],
            [
                'ten_khach_hang' => $request->ten_khach_hang,
                'dia_chi' => $request->dia_chi,
                'email' => $request->email,
            ]
        );

        // Cập nhật thông tin đơn hàng
        $donHang->khach_hang_id = $khachHang->id;
        $donHang->nhan_vien_id = $request->nhan_vien_id;
        $donHang->san_pham_id = $request->san_pham_id;
        $donHang->so_luong = $request->so_luong;
        $donHang->don_gia = $request->don_gia;
        $donHang->tong_tien = $request->so_luong * $request->don_gia;
        $donHang->dia_chi_nhan_hang = $khachHang->dia_chi;
        $donHang->tinh_trang_don_hang_id = $request->tinh_trang_don_hang_id;
        $donHang->save();

        return redirect()->route('quan-li-don-hang.index');
    }

    public function Xoa($id)
    {
        $donHang = DonHangModels::find($id);
        if (empty($donHang)) {
            return "Đơn hàng không tồn tại";
        }
        
        $donHang->delete();
        return redirect()->route('quan-li-don-hang.index');
    }
}
