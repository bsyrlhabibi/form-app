<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'nomor',
        'tujuan_asesmen',
    ];

    public function competenceUnits()
    {
        return $this->hasMany(CompetenceUnit::class);
    }
}

