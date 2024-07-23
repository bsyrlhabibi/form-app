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
            'no_telepon' => 'required|string|max:15',
        ]);

        Bagiansatu::create($validatedData);

        return redirect('/form')->with('success', 'Formulir berhasil disimpan!');
    }
    
}
