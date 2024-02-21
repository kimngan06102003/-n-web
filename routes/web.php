<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BinhLuanController;
use App\Http\Controllers\DangNhapController;
use App\Http\Controllers\DanhMucSanPhamController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\SanPhamController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('BackEnd.dang-nhap');
});
// Đăng nhập vào hệ thống
    Route::get('/dang-nhap', [DangNhapController::class, 'DangNhap'])->name('BackEnd.dang-nhap');
    Route::post('/xu-li-dang-nhap', [DangNhapController::class, 'XuLyDangNhap'])->name('xu-ly-dang-nhap');
    Route::post('/dang-xuat', [DangNhapController::class, 'DangXuat'])->name('dang-xuat');

    Route::middleware(['admin'])->group(function () {
        // Các tuyến đường của trang chủ admin
        Route::get('/trang-chu', [DangNhapController::class, 'TrangChu'])->name('BackEnd.trang-chu');
        // Các tuyến đường khác
        Route::get('san-pham', [SanPhamController::class, 'DanhSachSanPham'])->name('BackEnd.quan-li-san-pham.index');
        Route::get('san-pham/them-moi', [SanPhamController::class, 'ThemMoi'])->name('BackEnd.quan-li-san-pham.them-moi');
        Route::post('san-pham/them-moi', [SanPhamController::class, 'XuLyThemMoi'])->name('BackEnd.quan-li-san-pham.xu-ly-them-moi');
        Route::get('san-pham/cap-nhat/{id}', [SanPhamController::class, 'CapNhat'])->name('BackEnd.quan-li-san-pham.cap-nhat');
        Route::post('san-pham/cap-nhat/{id}', [SanPhamController::class, 'XuLyCapNhat'])->name('BackEnd.quan-li-san-pham.xu-ly-cap-nhat');        
        Route::get('san-pham/xoa/{id}', [SanPhamController::class, 'Xoa'])->name('BackEnd.quan-li-san-pham.xoa');

        Route::get('danh-muc', [DanhMucSanPhamController::class, 'DanhMucSanPham'])->name('BackEnd.quan-li-danh-muc-san-pham.index');
        Route::get('danh-muc/them-moi', [DanhMucSanPhamController::class, 'ThemMoi'])->name('BackEnd.quan-li-danh-muc-san-pham.them-moi');
        Route::post('danh-muc/them-moi', [DanhMucSanPhamController::class, 'XuLyThemMoi'])->name('BackEnd.quan-li-danh-muc-san-pham.xu-ly-them-moi');
        Route::get('danh-muc/cap-nhat/{id}', [DanhMucSanPhamController::class, 'CapNhat'])->name('BackEnd.quan-li-danh-muc-san-pham.cap-nhat');
        Route::post('danh-muc/cap-nhat/{id}', [DanhMucSanPhamController::class, 'XuLyCapNhat'])->name('BackEnd.quan-li-danh-muc-san-pham.xu-ly-cap-nhat');
        Route::get('danh-muc/xoa/{id}', [DanhMucSanPhamController::class, 'Xoa'])->name('BackEnd.quan-li-danh-muc-san-pham.xoa');

        Route::get('nha-cung-cap', [NhaCungCapController::class, 'DanhSachNhaCungCap'])->name('BackEnd.quan-li-nha-cung-cap.index');
        Route::get('nha-cung-cap/them-moi', [NhaCungCapController::class, 'ThemMoi'])->name('BackEnd.quan-li-nha-cung-cap.them-moi');
        Route::post('nha-cung-cap/them-moi', [NhaCungCapController::class, 'XuLyThemMoi'])->name('BackEnd.quan-li-nha-cung-cap.xu-ly-them-moi');
        Route::get('nha-cung-cap/cap-nhat/{id}', [NhaCungCapController::class, 'CapNhat'])->name('BackEnd.quan-li-nha-cung-cap.cap-nhat');
        Route::post('nha-cung-cap/cap-nhat/{id}', [NhaCungCapController::class, 'XuLyCapNhat'])->name('BackEnd.quan-li-nha-cung-cap.xu-ly-cap-nhat');
        Route::get('nha-cung-cap/xoa/{id}', [NhaCungCapController::class, 'Xoa'])->name('BackEnd.quan-li-nha-cung-cap.xoa');

        Route::get('khach-hang', [KhachHangController::class, 'DanhSachKhachHang'])->name('BackEnd.quan-li-khach-hang.index');
        Route::get('khach-hang/them-moi', [KhachHangController::class, 'ThemMoi'])->name('BackEnd.quan-li-khach-hang.them-moi');
        Route::post('khach-hang/them-moi', [KhachHangController::class, 'XuLyThemMoi'])->name('BackEnd.quan-li-khach-hang.xu-ly-them-moi');
        Route::get('khach-hang/cap-nhat/{id}', [KhachHangController::class, 'CapNhat'])->name('BackEnd.quan-li-khach-hang.cap-nhat');
        Route::post('khach-hang/cap-nhat/{id}', [KhachHangController::class, 'XuLyCapNhat'])->name('BackEnd.quan-li-khach-hang.xu-ly-cap-nhat');
        Route::get('khach-hang/xoa/{id}', [KhachHangController::class, 'Xoa'])->name('BackEnd.quan-li-khach-hang.xoa');

        Route::get('nhan-vien', [NhanVienController::class, 'DanhSachNhanVien'])->name('BackEnd.quan-li-nhan-vien.index');
        Route::get('nhan-vien/them-moi', [NhanVienController::class, 'ThemMoi'])->name('BackEnd.quan-li-nhan-vien.them-moi');
        Route::post('nhan-vien/them-moi', [NhanVienController::class, 'XuLyThemMoi'])->name('BackEnd.quan-li-nhan-vien.xu-ly-them-moi');
        Route::get('nhan-vien/cap-nhat/{id}', [NhanVienController::class, 'CapNhat'])->name('BackEnd.quan-li-nhan-vien.cap-nhat');
        Route::post('nhan-vien/cap-nhat/{id}', [NhanVienController::class, 'XuLyCapNhat'])->name('BackEnd.quan-li-nhan-vien.xu-ly-cap-nhat');
        Route::get('nhan-vien/xoa/{id}', [NhanVienController::class, 'Xoa'])->name('BackEnd.quan-li-nhan-vien.xoa');

        Route::get('admin', [AdminController::class, 'DanhSachAdmin'])->name('BackEnd.quan-li-tai-khoan-admin.index');
        Route::get('don-hang', [DonHangController::class, 'DanhSachDonHang'])->name('BackEnd.quan-li-don-hang.index');
        Route::get('don-hang/them-moi', [DonHangController::class, 'ThemMoi'])->name('BackEnd.quan-li-don-hang.them-moi');
        Route::post('don-hang/them-moi', [DonHangController::class, 'XuLyThemMoi'])->name('BackEnd.quan-li-don-hang.xu-ly-them-moi');
        Route::get('don-hang/cap-nhat', [DonHangController::class, 'CapNhat'])->name('BackEnd.quan-li-don-hang.cap-nhat');
        Route::post('don-hang/cap-nhat', [DonHangController::class, 'XuLyCapNhat'])->name('BackEnd.quan-li-don-hang.xu-ly-cap-nhat');
        Route::get('don-hang/xoa/{id}', [DonHangController::class, 'Xoa'])->name('BackEnd.quan-li-don-hang.xoa');

        Route::get('binh-luan', [BinhLuanController::class, 'DanhSachBinhLuan'])->name('BackEnd.quan-li-binh-luan.index');
        Route::get('binh-luan/xoa/{id}', [BinhLuanController::class, 'Xoa'])->name('BackEnd.quan-li-tai-binh-luan.xoa');
    });
    
