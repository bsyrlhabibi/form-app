<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiPersyaratanDasar extends Model
{
    use HasFactory;

    protected $fillable = [
        'bagiansatu_id',
        'memenuhi_syarat',
        'tidak_memenuhi_syarat',
        'tidakada',
    ];

    public function bagiansatu()
    {
        return $this->belongsTo(Bagiansatu::class);
    }
}





