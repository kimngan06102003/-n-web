@extends('trang-chu')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">CẬP NHẬT THÔNG TIN NHÂN VIÊN</h1>
    </div>
    <form method="POST" enctype="multipart/form-data" action="{{ route('quan-li-nhan-vien.xu-ly-cap-nhat',['id' => $nhanvien->id]) }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label for="ten_nhan_vien" class="form-label">Tên nhân viên</label>
            <input type="text" class="form-control" name="ten_nhan_vien" id="ten_nhan_vien" value="{{$nhanvien->ten_nhan_vien}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="so_dien_thoai" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" name="so_dien_thoai" id="so_dien_thoai"value="{{$nhanvien->so_dien_thoai}}" required>
        </div>
    </div>    
    <div class="col-md-6">
        <button type="submit" class="btn btn-primary">Lưu</button>
    </div>
    </form>
@endsection