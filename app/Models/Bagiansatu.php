<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagiansatu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'no_ktp',
        'tempat_tanggal_lahir',
        'jenis_kelamin',
        'kebangsaan',
        'alamat_rumah',
        'kode_pos',
        'no_telepon'
    ];
}
