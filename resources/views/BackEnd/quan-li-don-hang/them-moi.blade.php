@extends('BackEnd.trang-chu')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">THÊM ĐƠN HÀNG</h1>
    </div>
    <form method="POST" enctype="multipart/form-data" action="{{ route('BackEnd.quan-li-don-hang.xu-ly-them-moi') }}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="ten_khach_hang" class="form-label">Tên khách hàng</label>
                <input type="text" class="form-control" name="ten_khach_hang" id="ten_khach_hang" required>
            </div>
            <div class="col-md-6">
                <label for="so_dien_thoai" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" name="so_dien_thoai" id="so_dien_thoai" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="col-md-6">
                <label for="dia_chi_nhan_hang" class="form-label">Địa chỉ nhận hàng</label>
                <input type="text" class="form-control" name="dia_chi_nhan_hang" id="dia_chi_nhan_hang" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="nhan_vien_id" class="form-label">Tên nhân viên giao hàng</label>
                <select name="nhan_vien_id" class="form-select">
                    @foreach($dsNhanVien as $nhanVien)
                        <option value="{{ $nhanVien->id }}">{{ $nhanVien->ten_nhan_vien }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="san_pham_id" class="form-label">Tên sản phẩm</label>
                <select name="san_pham_id" class="form-select" id="san_pham_id" onchange="updatePriceAndTotal()">
                    @foreach($dsSanPham as $sanPham)
                        <option value="{{ $sanPham->id }}" data-price="{{ $sanPham->don_gia }}">{{ $sanPham->ten_san_pham }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="so_luong" class="form-label">Số lượng</label>
                <input type="text" class="form-control" name="so_luong" id="so_luong" required onchange="updatePriceAndTotal()">
            </div>
            <div class="col-md-6">
                <label for="don_gia" class="form-label">Đơn giá</label>
                <input type="text" class="form-control" name="don_gia" id="don_gia" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="tong_tien" class="form-label">Tổng tiền</label>
                <input type="text" class="form-control" name="tong_tien" id="tong_tien" readonly>
            </div>
            <div class="col-md-6">
                <label for="tinh_trang_don_hang_id" class="form-label">Tình trạng giao hàng</label>
                <select name="tinh_trang_don_hang_id" class="form-select">
                    @foreach($dsTinhTrangDonHang as $tinhtrang)
                        <option value="{{ $tinhtrang->id }}">{{ $tinhtrang->tinh_trang }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-12 mt-3">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        function updatePriceAndTotal() {
            var sanPhamSelect = document.getElementById('san_pham_id');
            var selectedOption = sanPhamSelect.options[sanPhamSelect.selectedIndex];
            var price = parseFloat(selectedOption.getAttribute('data-price'));
            var quantity = parseFloat(document.getElementById('so_luong').value);
            var total = price * quantity;
            document.getElementById('don_gia').value = price;
            document.getElementById('tong_tien').value = total;
        }
    </script>
@endsection
