<?php

namespace App\Http\Controllers;

use App\Models\NhaCungCapModels;
use Illuminate\Http\Request;

class NhaCungCapController extends Controller
{
    
    public function DanhSachNhaCungCap()
    {
        $dsNhaCungCap=NhaCungCapModels::all();
        return view('BackEnd.quan-li-nha-cung-cap.index',compact('dsNhaCungCap'));
    }
    public function ThemMoi()
    {
        $dsNhaCungCap=NhaCungCapModels::all();
        return view('BackEnd.quan-li-nha-cung-cap.them-moi',compact('dsNhaCungCap'));

    }
    
    public function XuLyThemMoi(Request $request)
    {
        $validatedData = $request->validate([
            'ten_nha_cung_cap' => 'required', // Đảm bảo rằng trường này không phải là NULL hoặc rỗng
        ]);
        $existingNhaCungCap = NhaCungCapModels::where('ten_nha_cung_cap', $request->ten_nha_cung_cap)->first();
        if ($existingNhaCungCap) {
            return view('BackEnd.quan-li-nha-cung-cap.them-moi')->with('error', 'Tên nhà cung cấp đã tồn tại');
        }   
        $nhacungcap = new NhaCungCapModels();
        $nhacungcap->ten_nha_cung_cap = $request->ten_nha_cung_cap;
        $nhacungcap->save();
        try {
            $nhacungcap->save();
            return redirect()->route('BackEnd.quan-li-nha-cung-cap.index')->with('success', 'Thêm nhà cung cấp mới thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
        }
    }
    
    
    public function CapNhat($id)
    {
        $nhacungcap=NhaCungCapModels::find($id);
        return view('BackEnd.quan-li-nha-cung-cap.cap-nhat', compact('nhacungcap'));
    }

    public function XuLyCapNhat(Request $request, $id)
    {
        $nhacungcap = NhaCungCapModels::find($id);      
        $nhacungcap->ten_nha_cung_cap = $request->ten_nha_cung_cap;
        $nhacungcap->save();

        session()->flash('success', 'Cập nhật nhà cung cấp thành công');
        return redirect()->route('BackEnd.quan-li-nha-cung-cap.index');
    }
    public function Xoa($id)
    {
        $nhacungcap = NhaCungCapModels::find($id);      
        $nhacungcap->delete();
        session()->flash('success', 'Xoá nhà cung cấp thành công');
        return redirect()->route('BackEnd.quan-li-nha-cung-cap.index');
    }
}
