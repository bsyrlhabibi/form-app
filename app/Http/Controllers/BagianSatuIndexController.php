<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bagiansatu;
use PDF;

class BagianSatuIndexController extends Controller
{
    public function index()
    {
        $data = Bagiansatu::all();
        return view('viewdata', ['data' => $data]);

    }

    public function exportPdf($id)
    {
        $data = Bagiansatu::findOrFail($id);
        $pdf = PDF::loadView('pdfview', ['data' => $data]);
        return $pdf->download('data_bagiansatu_' . $id . '.pdf'); 
    }
}

