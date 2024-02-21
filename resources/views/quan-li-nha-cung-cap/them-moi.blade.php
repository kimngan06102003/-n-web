@extends('trang-chu')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">THÊM NHÀ CUNG CẤP</h1>
    </div>   

    <form method="POST" enctype="multipart/form-data" action="{{ route('quan-li-nha-cung-cap.xu-ly-them-moi') }}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="ten" class="form-label">Tên nhà cung cấp</label>
                <input type="text" class="form-control" name="ten_nha_cung_cap" id="ten">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </form>
@endsection
