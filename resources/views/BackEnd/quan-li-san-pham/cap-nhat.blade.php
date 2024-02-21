@extends('trang-chu')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">CẬP NHẬT THÔNG TIN SẢN PHẨM</h1>
    </div>
    <form method="POST" enctype="multipart/form-data" action="{{ route('quan-li-san-pham.xu-ly-cap-nhat',['id'=>$sanpham->id]) }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label for="ten_san_pham" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="ten_san_pham" id="ten_san_pham" value="{{ $sanpham->ten_san_pham}}"required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="anh_san_pham" class="form-label">Ảnh sản phẩm</label>
            <input type="file" class="form-control" id="anh_san_pham" name="anh_san_pham" value="{{$sanpham->anh_san_pham}}"required>   
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            <label for="gia" class="form-label">Giá</label>
            <input type="text" class="form-control" name="gia" id="gia" value="{{ $sanpham->gia}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="so_luong" class="form-label">Số lượng</label>
            <input type="text" class="form-control" name="so_luong" id="so_luong" value="{{ $sanpham->so_luong}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="kich_thuoc" class="form-label">Kích thước</label>
            <input type="text" class="form-control" name="kich_thuoc" id="kich_thuoc" value="{{ $sanpham->kich_thuoc}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="trong_luong" class="form-label">Trọng lượng</label>
            <input type="text" class="form-control" name="trong_luong" id="trong_luong" value="{{ $sanpham->trong_luong}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="mau_sac" class="form-label">Màu sắc</label>
            <input type="text" class="form-control" name="mau_sac" id="mau_sac" value="{{ $sanpham->mau_sac}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="am_thanh" class="form-label">Âm thanh</label>
            <input type="text" class="form-control" name="am_thanh" id="am_thanh" value="{{ $sanpham->am_thanh}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="bo_nho" class="form-label">Bộ nhớ</label>
            <input type="text" class="form-control" name="bo_nho" id="bo_nho" value="{{ $sanpham->bo_nho}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="he_dieu_hanh" class="form-label">Hệ điều hành</label>
            <input type="text" class="form-control" name="he_dieu_hanh" id="he_dieu_hanh" value="{{ $sanpham->he_dieu_hanh}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="camera" class="form-label">Camera</label>
            <input type="text" class="form-control" name="camera" id="camera" value="{{ $sanpham->camera}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="pib" class="form-label">Pin</label>
            <input type="text" class="form-control" name="pin" id="pin" value="{{ $sanpham->pin}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="cong_ket_noi'" class="form-label">Cổng kết nối</label>
            <input type="text" class="form-control" name="cong_ket_noi" id="cong_ket_noi" value="{{ $sanpham->cong_ket_noi}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="bao_hanh" class="form-label">Bảo hành</label>
            <input type="text" class="form-control" name="bao_hanh" id="bao_hanh" value="{{ $sanpham->bao_hanh}}"required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="danh_muc_san_pham" class="form-label">Danh mục sản phẩm</label>
            <select name="danh_muc_san_pham" class="form-select" id="danh_muc_san_pham">
                @foreach($dsDanhMuc as $DanhMucSanPham)
                <option value="{{$DanhMucSanPham->id}}" 
                    {{ $sanpham->danh_muc_san_pham_id == $DanhMucSanPham->id ? 'selected' : '' }}>
                    {{$DanhMucSanPham->ten_danh_muc}}
                </option>
                @endforeach
            </select>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="nha_cung_cap" class="form-label">Nhà cung cấp</label>
            <select name="nha_cung_cap" class="form-select" id="nha_cung_cap">
                @foreach($dsNhaCungCap as $NhaCungCap)
                <option value="{{$NhaCungCap->id}}" 
                    {{ $sanpham->nha_cung_cap_id == $NhaCungCap->id ? 'selected' : '' }}>
                    {{$NhaCungCap->ten_nha_cung_cap}}
                </option>
                @endforeach
            </select>

        </div>
    </div>
    <div class="col-md-2">
        <button type="submit" class="btn btn-primary">Lưu</button>
    </div>
    </form>
@endsection