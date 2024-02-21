@extends('trang-chu')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">THÊM KHÁCH HÀNG</h1>
    </div>
    <form method="POST" enctype="multipart/form-data" action="{{ route('quan-li-khach-hang.xu-ly-them-moi') }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label for="ten_khach_hang" class="form-label">Tên khách hàng</label>
            <input type="text" class="form-control" name="ten_khach_hang" id="ten_khach_hang" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="dia_chi" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" name="dia_chi" id="dia_chi"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="so_dien_thoai" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" name="so_dien_thoai" id="so_dien_thoai"required>
        </div>
    </div>

    <div class="col-md-6">
        <button type="submit" class="btn btn-primary">Lưu</button>
    </div>
    </form>
@endsection