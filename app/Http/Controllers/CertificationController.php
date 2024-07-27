<?php

namespace App\Http\Controllers;

use App\Http\Requests\CertificationRequest;
use App\Models\Certification;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CertificationController extends Controller
{
    public function create()
    {
        return view('bagiansatu');
    }

    public function store(CertificationRequest $request)
    {
        $data = $request->validated();
        $data['tujuan_asesmen'] = implode(', ', $request->tujuan_asesmen); // Mengubah array menjadi string
        Certification::create($data);
        return redirect()->route('certifications.create')->with('success', 'Data sertifikasi berhasil disimpan.');
    }
}
