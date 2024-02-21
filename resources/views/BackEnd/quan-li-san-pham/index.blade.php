@extends('BackEnd.trang-chu')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">DANH SÁCH SẢN PHẨM</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('BackEnd.quan-li-san-pham.them-moi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-bordered w-auto">
        <thead>
            <tr>
                <th class="col-md-5">Số thứ tự</th>
                <th class="col-md-2">Tên</th>
                <th class="col-md-2">Hình ảnh</th>
                <th class="col-md-1">Giá</th>
                <th class="col-md-1">Số lượng</th>
                <th class="col-md-1">Kích thước</th>
                <th class="col-md-1">Trọng lượng</th>
                <th class="col-md-1">Màu sắc</th>
                <th class="col-md-1">Âm thanh</th>
                <th class="col-md-1">Bộ nhớ</th>
                <th class="col-md-1">Hệ điều hành</th>
                <th class="col-md-1">Camera</th>
                <th class="col-md-1">Pin</th>
                <th class="col-md-1">Bảo hành</th>
                <th class="col-md-1">Cổng kết nối</th>
                <th class="col-md-2">Danh mục sản phẩm</th>
                <th class="col-md-2">Nhà cung cấp</th>
                <th class="col-md-1">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @php $stt = 1; @endphp
            @foreach($dsSanPham as $sanpham)
                <tr>
                    <td>{{$stt++}}</td>
                    <td>{{ $sanpham->ten_san_pham }}</td>
                    <td><img src="{{ asset('anh/' . $sanpham->anh_san_pham) }}" alt="Hình ảnh sản phẩm" style="width:100px;height:100px;"></td>
                    <td>{{ $sanpham->gia }}</td>
                    <td>{{ $sanpham->so_luong }}</td>
                    <td>{{ $sanpham->kich_thuoc }}</td>
                    <td>{{ $sanpham->trong_luong }}</td>
                    <td>{{ $sanpham->mau_sac }}</td>
                    <td>{{ $sanpham->am_thanh }}</td>
                    <td>{{ $sanpham->bo_nho }}</td>
                    <td>{{ $sanpham->he_dieu_hanh }}</td>
                    <td>{{ $sanpham->camera }}</td>
                    <td>{{ $sanpham->pin }}</td>
                    <td>{{ $sanpham->bao_hanh }}</td>
                    <td>{{ $sanpham->cong_ket_noi }}</td>
                    <td>{{ $sanpham->danh_muc_san_pham->ten_danh_muc }}</td>
                    <td>{{ $sanpham->nha_cung_cap->ten_nha_cung_cap }}</td>
                    <td>
                        <a href="{{ route('BackEnd.quan-li-san-pham.cap-nhat', ['id' => $sanpham->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </a> ||
                        <a href="{{ route('BackEnd.quan-li-san-pham.xoa', ['id' => $sanpham->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


