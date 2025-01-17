<?php

namespace App\Http\Controllers;

use App\Models\Room; // Sử dụng model PhongTro
use Illuminate\Http\Request;

class PhongTroController extends Controller
{
    public function index()
    {
        $rooms = Room::paginate(10); // Lấy danh sách phòng trọ
        return view('pages.phongtro.index')->with('rooms', $rooms);
    }

    public function search(Request $request)
    {
        if ($request->input('search')) {
            $rooms = Room::where(function ($query) use ($request) {
                $query->where('ten_phong', 'LIKE', '%' . $request->input('search') . '%')
                      ->orWhere('mo_ta', 'LIKE', '%' . $request->input('search') . '%');
            })->paginate(10);
        } else {
            $rooms = Room::paginate(10);
        }

        return view('pages.phongtro.index')->with('rooms', $rooms);
    }

    public function create()
    {
        return view('pages.phongtro.create');
    }

    public function store(Request $request)
    {
        // Validate dữ liệu
        $validated = $request->validate([
            'id_chutro' => 'required|integer',
            'ten_phong' => 'required|string|max:255',
            'dien_tich' => 'required|numeric',
            'so_nguoi_o' => 'required|integer',
            'gia_thue' => 'required|numeric',
            'mo_ta' => 'nullable|string',
            'trang_thai' => 'required|string|max:50',
        ], [
            'id_chutro.required' => 'ID chủ trọ không được bỏ trống.',
            'ten_phong.required' => 'Tên phòng không được bỏ trống.',
            'dien_tich.required' => 'Diện tích không được bỏ trống.',
            'so_nguoi_o.required' => 'Số người ở không được bỏ trống.',
            'gia_thue.required' => 'Giá thuê không được bỏ trống.',
            'trang_thai.required' => 'Trạng thái không được bỏ trống.',
        ]);
        try {
            Room::create([
                'id_chutro' => $validated['id_chutro'],
                'ten_phong' =>$validated['ten_phong'],
                'dien_tich' =>$validated['dien_tich'],
                'so_nguoi_o' =>$validated['so_nguoi_o'],
                'gia_thue' => $validated['gia_thue'],
                'mo_ta' => $validated['mo_ta'],
                'trang_thai' =>$validated['trang_thai'],
            ]);
            return redirect()->route('phongtro.index')->with('success', 'Phòng trọ đã được tạo thành công!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi tạo phòng trọ. Vui lòng thử lại!');
        }
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('pages.phongtro.edit')->with('room', $room);
    }

    public function update(Request $request)
    {
        // Validate dữ liệu
        $validated = $request->validate([
            'id_chutro' => 'required|integer',
            'ten_phong' => 'required|string|max:255',
            'dien_tich' => 'required|numeric',
            'so_nguoi_o' => 'required|integer',
            'gia_thue' => 'required|numeric',
            'mo_ta' => 'nullable|string',
            'trang_thai' => 'required|string|max:50',
        ]);
        try {
            $room = Room::findOrFail($request->input('id'));
            // Create the room
            $a= $room->update([
                'id_chutro' => $validated['id_chutro'],
                'ten_phong' =>$validated['ten_phong'],
                'dien_tich' =>$validated['dien_tich'],
                'so_nguoi_o' =>$validated['so_nguoi_o'],
                'gia_thue' => $validated['gia_thue'],
                'mo_ta' => $validated['mo_ta'],
                'trang_thai' =>$validated['trang_thai'],
            ]);
            // Redirect with a success message
            return redirect()->route('phongtro.index')->with('success', 'Người dùng được update thành công!');

        } catch (\Exception $e) {

            // Redirect with an error message if something goes wrong
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi update người dùng. Vui lòng thử lại!');
        }
    }

    public function delete($id)  {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('phongtro.index')->with('success', 'Xóa phòng trọ thành công!');
    }
}
