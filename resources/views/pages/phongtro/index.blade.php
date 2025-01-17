@extends('app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Rooms</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a class="btn btn-primary" href="{{route('phongtro.create')}}">Them</a>
            <form action="{{route('phongtro.search')}}">
                @csrf
                <div class="input-group">
                    <div class="form-outline" data-mdb-input-init>
                        <input type="search" name="search" id="form1" class="form-control"/>
                    </div>
                    <button type="submit" class="btn btn-primary" data-mdb-ripple-init>
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>id_chutro</th>
                        <th>ten_phong</th>
                        <th>dien_tich</th>
                        <th>so_nguoi_o</th>
                        <th>gia_thue</th>
                        <th>mo_ta</th>
                        <th>trang_thai</th>
                        <th>hanh dong</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                    <tr>
                        <td>{{$room->id}}</td>
                        <td>{{$room->id_chutro}}</td>
                        <td>{{$room->ten_phong}}</td>
                        <td>{{$room->dien_tich}}</td>
                        <td>{{$room->so_nguoi_o}}</td>
                        <td>{{$room->gia_thue}}</td>
                        <td>{{$room->mo_ta}}</td>
                        <td>{{$room->trang_thai}}</td>
                        <td>
                            <a class="btn btn-info" href="{{route('phongtro.edit', $room->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('phongtro.delete', $room->id) }}"
                                onclick="return confirm('Bạn có chắc muốn xóa phòng trọ này?');">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $rooms->links() }}
        </div>
    </div>
</div>


<!-- <script>
    Swal.fire({
        icon: 'success',
        title: 'Thành công!',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 3000
    });
</script> -->


@if (session('success'))


@endif

@if (session('error'))

@endif

@endsection