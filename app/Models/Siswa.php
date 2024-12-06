<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis', // Ensure this array is correctly formatted
        'nama',
        'alamat',
        'no_hp',
        'jenis_kelamin',
        'hobi',
    ];
}
