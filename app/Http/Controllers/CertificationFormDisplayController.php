<?php

namespace App\Http\Controllers;

use App\Models\CertificationForm;
use Illuminate\Http\Request;
use PDF;

class CertificationFormDisplayController extends Controller
{
  
    public function index()
    {
        $certificationForms = CertificationForm::all();
        return view('bagianduaindex', ['certificationForms' => $certificationForms]);
    }

    public function show($id)
    {
        $certificationForm = CertificationForm::with('competenceUnits')->findOrFail($id);
        return view('show', ['certificationForm' => $certificationForm]);
    }

    public function exportPdf($id)
    {
        $certificationForm = CertificationForm::with('competenceUnits')->findOrFail($id);
        $pdf = PDF::loadView('show', ['certificationForm' => $certificationForm]);
        return $pdf->download('data_bagiandua_' . $id . '.pdf');
    }
}
