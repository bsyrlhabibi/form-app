<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetenceUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'certification_id',
        'kode_unit',
        'judul_unit',
        'standar_kompetensi_kerja',
    ];

    public function certification()
    {
        return $this->belongsTo(Certification::class);
    }
}

