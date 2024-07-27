<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrMapa_01 extends Model
{
    use HasFactory;

    protected $fillable = [
        'kandidat',
        'tujuan',
        'konteks',
        'konfirmasi',
    ];
}
