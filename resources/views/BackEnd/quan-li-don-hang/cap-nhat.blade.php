@extends('BackEnd.trang-chu')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">CẬP NHẬT ĐƠN HÀNG</h1>
    </div>
    <form method="POST" enctype="multipart/form-data" action="{{ route('BackEnd.quan-li-don-hang.xu-ly-cap-nhat') }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label for="ten_khach_hang" class="form-label">Tên khách hàng</label>
            <input type="text" class="form-control" name="ten_khach_hang" id="ten_khach_hang" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="so_dien_thoai" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" name="so_dien_thoai" id="so-dien_thoai"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">email</label>
            <input type="text" class="form-control" name="email" id="email"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="dia_chi_nhan_hang" class="form-label">Địa chỉ nhận hàng</label>
            <input type="text" class="form-control" name="dia_chi_nhan_hang" id="dia_chi_nhan_hang" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="ten_nhan_vien" class="form-label">Tên nhân viên giao hàng</label>
            <select name="ten_nhan_vien" class="form-select">
                @foreach($dsNhanVien as $NhanVien)
                <option value="{{$NhanVien->id}}">{{$NhanVien->ten_nhan_vien}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="ten_san_pham" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="ten_san_pham" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="so_luong" class="form-label">Số lượng</label>
            <input type="text" class="form-control" name="so_luong" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="don_gia" class="form-label">Đơn giá</label>
            <input type="text" class="form-control" name="don_gia"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="tong_tien" class="form-label">Tổng tiền</label>
            <input type="text" class="form-control" name="tong_tien"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="tinh_trang_giao_hang" class="form-label">Tình trạng giao hàng</label>
            <select name="" class="form-select">
                @foreach($tinhtranggiaohang as $tinhtrang)
                <option value="{{$tinhtrang->id}}">{{$tinhtrang->tinh_trang}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-2">
        <button type="submit" class="btn btn-primary">Lưu</button>
    </div>
    </form>
@endsection