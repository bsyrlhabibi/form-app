<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asesmen;
use Barryvdh\DomPDF\Facade\Pdf;

class AsesmenController extends Controller
{
    public function create()
    {
        return view('createasesmen');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'elemen1_k'=> 'nullable|boolean',
            'elemen1_bk'=>'nullable|boolean',
            'elemen1_bukti1' => 'nullable|string',
            'elemen1_bukti2' => 'nullable|string',
            'elemen1_bukti3' => 'nullable|string',
            'elemen1_bukti4' => 'nullable|string',

            'elemen2_k' =>'nullable|boolean',
            'elemen2_bk' =>'nullable|boolean',
            'elemen2_bukti1' => 'nullable|string',
            'elemen2_bukti2' => 'nullable|string',
            'elemen2_bukti3' => 'nullable|string',
            'elemen2_bukti4' => 'nullable|string',

            'elemen3_k' =>'nullable|boolean',
            'elemen3_bk' =>'nullable|boolean',
            'elemen3_bukti1' => 'nullable|string',
            'elemen3_bukti2' => 'nullable|string',
            'elemen3_bukti3' => 'nullable|string',
            'elemen3_bukti4' => 'nullable|string',

        ]);

        Asesmen::create($validatedData);

        return redirect()->route('asesmen.create')->with('success', 'Asesmen berhasil ditambahkan!');
    }

    public function showData()
    {
        $asesmens = Asesmen::all();
        return view('asesmenshowdata', ['asesmens' => $asesmens]);
    }

    public function exportPDF($id)
    {
        $asesmen = Asesmen::findOrFail($id);  
    $pdf = Pdf::loadView('asesmenpdf', ['asesmens' => [$asesmen]]);  
    return $pdf->download('asesmen_' . $id . '.pdf');
    }
}


