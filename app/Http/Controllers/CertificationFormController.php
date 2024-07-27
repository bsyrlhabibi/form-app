<?php

namespace App\Http\Controllers;

use App\Models\CertificationForm;
use App\Models\CompetenceUnit;
use Illuminate\Http\Request;

class CertificationFormController extends Controller
{
    public function create()
    {
        return view('bagiandua');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'nomor' => 'required|string|max:255',
            'tujuan' => 'required|array',
            'tujuan.*' => 'string',
        ]);

        $certificationForm = CertificationForm::create([
            'judul' => $request->judul,
            'nomor' => $request->nomor,
            'tujuan' => $request->tujuan,
        ]);

        $units = $request->only(['kode_unit', 'judul_unit', 'standar_kompetensi']);
        
        foreach ($units['kode_unit'] as $index => $kodeUnit) {
            if (!empty($kodeUnit) || !empty($units['judul_unit'][$index]) || !empty($units['standar_kompetensi'][$index])) {
                CompetenceUnit::create([
                    'certification_form_id' => $certificationForm->id,
                    'kode_unit' => $kodeUnit,
                    'judul_unit' => $units['judul_unit'][$index] ?? '',
                    'standar_kompetensi' => $units['standar_kompetensi'][$index] ?? '',
                ]);
            }
        }

        return redirect()->route('certification-form.create')->with('success', 'Formulir Sertifikasi berhasil dibuat!');
    }
}

