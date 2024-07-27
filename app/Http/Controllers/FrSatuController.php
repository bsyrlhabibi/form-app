<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bagiansatu;
use App\Models\Certification;
use App\Models\CompetenceUnit;
use App\Models\BuktiPersyaratanDasar;
use Barryvdh\DomPDF\Facade\Pdf;

class FrSatuController extends Controller
{
    public function showForm()
    {
        return view('bagiansatu');
    }

    public function store(Request $request)
    {

        $validatedBagiansatuData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:255',
            'tempat_tanggal_lahir' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'kebangsaan' => 'required|string|max:255',
            'alamat_rumah' => 'required|string',
            'kode_pos' => 'required|string|max:10',
            'no_rumah' => 'required|string|max:15',
            'no_hp' => 'required|string|max:15',
            'no_kantor' => 'required|string|max:15',
            'email' => 'required|string|max:30',
            'kualifikasi_pendidikan' => 'required|string|max:30',
            'nama_institusi' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'alamat_kantor' => 'required|string',
            'kode_pos_kantor' => 'required|string|max:10',
            'no_telp' => 'required|string|max:15',
            'fax' => 'required|string|max:15',
            'email_kantor' => 'required|string|max:30',
        ]);

        $bagiansatu = Bagiansatu::create($validatedBagiansatuData);

        $validatedCertificationData = $request->validate([
            'judul' => 'required|string|max:255',
            'nomor' => 'required|string|max:255',
            'tujuan_asesmen' => 'required|array',
            'tujuan_asesmen.*' => 'string',
        ]);

        $validatedCertificationData['tujuan_asesmen'] = implode(', ', $request->tujuan_asesmen); 
        
        $certification = Certification::create($validatedCertificationData);

        $validatedCompetenceUnitData = $request->validate([
            'unit_kompetensi.*.kode_unit' => 'required|string|max:255',
            'unit_kompetensi.*.judul_unit' => 'required|string|max:255',
            'unit_kompetensi.*.kompetensi_kerja' => 'required|string',
        ]);

        foreach ($validatedCompetenceUnitData['unit_kompetensi'] as $unit) {
            CompetenceUnit::create([
                'certification_id' => $certification->id,
                'kode_unit' => $unit['kode_unit'],
                'judul_unit' => $unit['judul_unit'],
                'standar_kompetensi_kerja' => $unit['kompetensi_kerja'],
            ]);
        }

        $validatedBuktiPersyaratanDasarData = $request->validate([
            'bukti_persyaratan_dasar' => 'required|array',
            'bukti_persyaratan_dasar.*.memenuhi_syarat' => 'nullable|boolean',
            'bukti_persyaratan_dasar.*.tidak_memenuhi_syarat' => 'nullable|boolean',
            'bukti_persyaratan_dasar.*.tidakada' => 'nullable|string',
        ]);

        foreach ($validatedBuktiPersyaratanDasarData['bukti_persyaratan_dasar'] as $index => $bukti) {
            BuktiPersyaratanDasar::create([
                'bagiansatu_id' => $bagiansatu->id,
                'memenuhi_syarat' => $bukti['memenuhi_syarat'] ?? null,
                'tidak_memenuhi_syarat' => $bukti['tidak_memenuhi_syarat'] ?? null,
                'tidakada' => $bukti['tidakada'] ?? null,
            ]);
        }

        return redirect('/form')->with('success', 'Data berhasil disimpan!');
    }

    public function showData()
{
    $bagiansatuData = Bagiansatu::with('buktiPersyaratanDasar')->get();
    $certificationData = Certification::with('competenceUnits')->get();
    return view('showdata', compact('bagiansatuData', 'certificationData'));
}

public function exportPDF($id)
{
    $bagiansatuData = Bagiansatu::with('buktiPersyaratanDasar')->findOrFail($id);
    $certificationData = Certification::with('competenceUnits')->findOrFail($id);
    $pdf = Pdf::loadView('exportpdf', compact('bagiansatuData', 'certificationData'));
    return $pdf->download("data_$id.pdf");
}
}
