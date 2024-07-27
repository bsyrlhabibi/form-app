<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bagiansatu;

class BagianSatuController extends Controller
{
    public function showForm()
    {
        return view('bagiansatu');
    }

    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
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

        Bagiansatu::create($validatedData);

        return redirect('/form')->with('success', 'Formulir berhasil disimpan!');
    }
    
}