@extends('app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thêm mới phòng trọ</h6>
    </div>
    <div class="card-body">
        <form action="{{route('phongtro.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">ID Chủ trọ</label>
                <input type="text" class="form-control" name="id_chutro" value="{{old('id_chutro')}}">
            </div>
            <div class="form-group">
                <label for="ten_phong">Tên phòng</label>
                <input type="text" class="form-control" name="ten_phong" value="{{old('ten_phong')}}">
            </div>
            <div class="form-group">
                <label for="dien_tich">Diện tích</label>
                <input type="text" class="form-control" name="dien_tich" value="{{old('dien_tich')}}">
            </div>
            <div class="form-group">
                <label for="so_nguoi_o">Số người ở</label>
                <input type="number" class="form-control" name="so_nguoi_o" value="{{old('so_nguoi_o')}}">
            </div>
            <div class="form-group">
                <label for="gia_thue">Giá thuê</label>
                <input type="text" class="form-control" name="gia_thue" value="{{old('gia_thue')}}">
            </div>
            <div class="form-group">
                <label for="mo_ta">Mô tả</label>
                <textarea class="form-control" name="mo_ta">{{old('mo_ta')}}</textarea>
            </div>
            <div class="form-group">
                <label for="trang_thai">Trạng thái</label>
                <select class="form-control" name="trang_thai">
                    <option value="trống" {{ old('trang_thai', 'trống') == 'trống' ? 'selected' : '' }}>Còn trống</option>
                    <option value="đã thuê" {{ old('trang_thai') == 'đã thuê' ? 'selected' : '' }}>Đã thuê</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>
</div>
@endsection