<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\AdminModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DangNhapController extends Controller
{
    //
    public function DangNhap()
    {
        return view('dang-nhap');
    }
    public function TrangChu()
    {
        return view('trang-chu');
    }

    // Phương thức xử lý đăng nhập
    public function XuLyDangNhap(AuthRequest $request)
    {
        // Kiểm tra thông tin đăng nhập từ request
        $credentials = $request->validated();

        // Tìm người dùng trong cơ sở dữ liệu
        $user = AdminModels::where('ten_dang_nhap', $credentials['ten_dang_nhap'])->first();

        // Kiểm tra xem người dùng có tồn tại không và mật khẩu có khớp không
        if ($user && strcmp($request->ten_dang_nhap, $user->ten_dang_nhap) === 0 && Hash::check($credentials['mat_khau'], $user->mat_khau)) {
            // Đăng nhập thành công
            Auth::login($user);
            return redirect()->route('trang-chu')->with('success', 'Đăng nhập thành công.');
        } else {
            // Đăng nhập không thành công
            return redirect()->route('dang-nhap')->with('error', 'Tên đăng nhập hoặc mật khẩu không chính xác.');
        }
    }



    // Phương thức đăng xuất
public function DangXuat()
    {
        Auth::logout();
        return redirect()->route('dang-nhap')->with('success', 'Đăng xuất thành công');
    }
    
}
