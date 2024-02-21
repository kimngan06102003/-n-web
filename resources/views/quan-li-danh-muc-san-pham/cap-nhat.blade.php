@extends('trang-chu')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">CẬP NHẬT LOẠI SẢN PHẨM</h1>
</div>
<form class="row g-3 update-form" method="POST" action="{{ route('quan-li-danh-muc-san-pham.xu-ly-cap-nhat', ['id' => $danhmuc->id]) }}">
   @csrf
    <div class="row">
        <div class="col-md-6">
            <label for="ten_danh_muc" class="form-label">Tên</label>
            <input type="text" class="form-control" name="ten_danh_muc" id="ten_danh_muc" value="{{$danhmuc->ten_danh_muc}}" required>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </div>  
</form>
@endsection