<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrMapa_01;

class FrMapa01Controller extends Controller
{
    public function create()
    {
        return view('frmapa01');
    }

    public function store(Request $request)
    {
        $validatedCertificationData = $request->validate([
            'kandidat' => 'required|array',
            'kandidat.*' => 'string',
            'tujuan' => 'required|array',
            'tujuan.*' => 'string',
            'konteks' => 'required|array',
            'konteks.*' => 'string',
            'konfirmasi' => 'required|array',
            'konfirmasi.*' => 'string',
        ]);

        $validatedCertificationData['kandidat'] = implode(', ', $request->kandidat); 
        $validatedCertificationData['tujuan'] = implode(', ', $request->tujuan); 
        $validatedCertificationData['konteks'] = implode(', ', $request->konteks); 
        $validatedCertificationData['konfirmasi'] = implode(', ', $request->konfirmasi); 

        FrMapa_01::create($validatedCertificationData);

        return redirect()->route('frmapa01.create')->with('success', 'Asesmen berhasil ditambahkan!');
    }
}
