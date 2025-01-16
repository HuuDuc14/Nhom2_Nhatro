<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms'; // Tên bảng
    protected $primaryKey = 'id'; // Khóa chính
    protected $fillable = [
        'id_chutro',
        'ten_phong',
        'dien_tich',
        'so_nguoi_o',
        'gia_thue',
        'mo_ta',
        'trang_thai',
    ];
}
