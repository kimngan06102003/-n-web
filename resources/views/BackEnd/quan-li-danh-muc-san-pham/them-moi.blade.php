@extends('BackEnd.trang-chu')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">THÊM DANH MỤC SẢN PHẨM</h1>
    </div>
    <form method="POST" enctype="multipart/form-data" action="{{ route('BackEnd.quan-li-danh-muc-san-pham.xu-ly-them-moi') }}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="ten" class="form-label">Tên danh mục</label>
                <input type="text" class="form-control" name="ten_danh_muc" id="ten" required>
            </div>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
@endsection