<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Chutro extends Authenticatable
{
    use HasFactory;

    protected $table = 'chutro';

    protected $fillable = [
        'username', 'email', 'password', 'phone'
    ];

    protected $hidden = [
        'password',
    ];

    // Optional: add any custom methods for authentication if needed
}
