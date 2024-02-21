@extends('trang-chu')

@section('content')
<div class="container">
    <h1 class="h2">CHI TIẾT SẢN PHẨM</h1>
    <div class="row">
        @foreach($sanpham as $sanpham)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="{{ asset('anh/' . $sanpham->anh_san_pham) }}" class="card-img-top" alt="Hình ảnh sản phẩm">
                <div class="card-body"> 
                    <h5 class="card-title">{{ $sanpham->ten_san_pham }}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Giá: {{ $sanpham->gia }}</li>
                        <li class="list-group-item">Số lượng: {{ $sanpham->so_luong }}</li>
                        <li class="list-group-item">Kích thước: {{ $sanpham->kich_thuoc }}</li>
                        <li class="list-group-item">Trọng lượng: {{ $sanpham->trong_luong }}</li>
                        <li class="list-group-item">Màu sắc: {{ $sanpham->mau_sac }}</li>
                        <li class="list-group-item">Âm thanh: {{ $sanpham->am_thanh }}</li>
                        <li class="list-group-item">Bộ nhớ: {{ $sanpham->bo_nho }}</li>
                        <li class="list-group-item">Hệ điều hành: {{ $sanpham->he_dieu_hanh }}</li>
                        <li class="list-group-item">Camera: {{ $sanpham->camera }}</li>
                        <li class="list-group-item">Pin: {{ $sanpham->pin }}</li>
                        <li class="list-group-item">Bảo hành: {{ $sanpham->bao_hanh }}</li>
                        <li class="list-group-item">Cổng kết nối: {{ $sanpham->cong_ket_noi }}</li>
                        <li class="list-group-item">Danh mục sản phẩm: {{ $sanpham->danh_muc_san_pham->ten_danh_muc }}</li>
                        <li class="list-group-item">Nhà cung cấp: {{ $sanpham->nha_cung_cap->ten_nha_cung_cap }}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
