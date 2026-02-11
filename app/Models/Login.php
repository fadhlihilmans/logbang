<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    // Arahkan ke tabel 'login' yang baru kita buat
    protected $table = 'login';

    // Izinkan kolom ini diisi
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}