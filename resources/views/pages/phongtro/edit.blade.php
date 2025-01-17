@extends('app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sửa thông tin phòng trọ</h6>
    </div>
    <div class="card-body">
        <form action="{{route('phongtro.update')}}" method="post">
            @csrf
            <input type="hidden" class="form-control" name="id" value="{{$room->id}}">

            <div class="form-group">
                <label for="id_chutro">ID Chủ trọ</label>
                <input type="text" class="form-control" name="id_chutro" value="{{$room->id_chutro}}">
            </div>
            <div class="form-group">
                <label for="ten_phong">Tên phòng</label>
                <input type="text" class="form-control" name="ten_phong" value="{{$room->ten_phong}}">
            </div>
            <div class="form-group">
                <label for="dien_tich">Diện tích</label>
                <input type="text" class="form-control" name="dien_tich" value="{{$room->dien_tich}}">
            </div>
            <div class="form-group">
                <label for="so_nguoi_o">Số người ở</label>
                <input type="number" class="form-control" name="so_nguoi_o" value="{{$room->so_nguoi_o}}">
            </div>
            <div class="form-group">
                <label for="gia_thue">Giá thuê</label>
                <input type="text" class="form-control" name="gia_thue" value="{{$room->gia_thue}}">
            </div>
            <div class="form-group">
                <label for="mo_ta">Mô tả</label>
                <textarea class="form-control" name="mo_ta">{{$room->mo_ta}}</textarea>
            </div>
            <div class="form-group">
                <label for="trang_thai">Trạng thái</label>
                <select class="form-control" name="trang_thai">
                    <option selected value="trống" {{ $room->trang_thai == 'trống' ? 'selected' : '' }}>Trống</option>
                    <option value="đã thuê" {{ $room->trang_thai == 'đã thuê' ? 'selected' : '' }}>Đã thuê</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>
@endsection
