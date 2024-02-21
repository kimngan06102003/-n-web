@extends('trang-chu')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">CẬP NHẬT NHÀ CUNG CẤP</h1>
</div>
<form class="row g-3 update-form" method="POST" action="{{ route('quan-li-nha-cung-cap.xu-ly-cap-nhat', ['id' => $nhacungcap->id]) }}"  >
   @csrf
   <div class="row">
        <div class="col-md-6">
            <label for="ten_nha_cung_cap" class="form-label">Tên nhà cung cấp</label>
            <input type="text" class="form-control" name="ten_nha_cung_cap" id="ten_nha_cung_cap" value="{{ $nhacungcap->ten_nha_cung_cap }}" required>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </div>

</form>
@endsection
