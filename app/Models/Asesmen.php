<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesmen extends Model
{
    use HasFactory;

    protected $fillable = [
        'elemen1_k',
        'elemen1_bk',
        'elemen1_bukti1',
        'elemen1_bukti2',
        'elemen1_bukti3',
        'elemen1_bukti4',
        
        'elemen2_k',
        'elemen2_bk',
        'elemen2_bukti1',
        'elemen2_bukti2',
        'elemen2_bukti3',
        'elemen2_bukti4',

        'elemen3_k',
        'elemen3_bk',
        'elemen3_bukti1',
        'elemen3_bukti2',
        'elemen3_bukti3',
        'elemen3_bukti4',
    ];
}

