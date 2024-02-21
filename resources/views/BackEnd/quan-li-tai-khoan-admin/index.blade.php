@extends('BackEnd.trang-chu')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">THÔNG TIN TÀI KHOẢN</h1>
        <form action="{{ route('dang-xuat') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Đăng xuất</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ Auth::user()->ten_dang_nhap }}</td>
                    <td>*******</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
