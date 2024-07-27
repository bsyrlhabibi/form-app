<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagianSatuController;
use App\Http\Controllers\BagianSatuIndexController;
use App\Http\Controllers\CertificationFormController;
use App\Http\Controllers\CertificationFormDisplayController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\FrSatuController;
use App\Http\Controllers\AsesmenController;
use App\Http\Controllers\FrMapa01Controller;

Route::get('/', function(){
    return view('layout.master');
});

Route::get('frmapa01/create', [FrMapa01Controller::class, 'create'])->name('frmapa01.create');
Route::post('frmapa01', [FrMapa01Controller::class, 'store'])->name('frmapa01.store');

Route::get('asesmen/create', [AsesmenController::class, 'create'])->name('asesmen.create');
Route::post('asesmen', [AsesmenController::class, 'store'])->name('asesmen.store');
Route::get('asesmen/show', [AsesmenController::class, 'showData'])->name('asesmen.show');
Route::get('asesmen/export/{id}', [AsesmenController::class, 'exportPDF'])->name('asesmen.export');

Route::get('/form', [FrSatuController::class, 'showForm'])->name('bagiansatu.showForm');
Route::post('/form', [FrSatuController::class, 'store'])->name('bagiansatu.store');
Route::get('/showdata', [FrSatuController::class, 'showData'])->name('show.data');
Route::get('/exportpdf/{id}', [FrSatuController::class, 'exportPDF'])->name('export.pdf');




// Route::get('/form', [BagianSatuController::class, 'showForm'])->name('bagiansatu.showForm');
// Route::post('/store', [BagianSatuController::class, 'store'])->name('bagiansatu.store');

Route::get('/viewdata', [BagianSatuIndexController::class, 'index'])->name('viewdata.index');

Route::get('viewdata/export-pdf/{id}', [BagianSatuIndexController::class, 'exportPdf'])->name('viewdata.exportPdf');
Route::get('/certification-form/create', [CertificationFormController::class, 'create'])->name('certification-form.create');
Route::post('/certification-form/store', [CertificationFormController::class, 'store'])->name('certification-form.store');

Route::get('/certification', [CertificationFormDisplayController::class, 'index'])->name('certification-form.index');
Route::get('/certification/export-pdf/{id}', [CertificationFormDisplayController::class, 'exportPdf'])->name('certification-form.exportPdf');

// Route::get('/certifications/create', [CertificationController::class, 'create'])->name('certifications.create');
// Route::post('/certifications', [CertificationController::class, 'store'])->name('certifications.store');
Route::get('/certifications/create', [CertificationController::class, 'create'])->name('certifications.create');
Route::post('/certifications', [CertificationController::class, 'store'])->name('certifications.store');
// Route::get('/certifications', [CertificationController::class, 'index'])->name('certifications.index');
// Route::get('/certifications/export-pdf', [CertificationController::class, 'exportPdf'])->name('certifications.exportPdf');
// web.php
Route::get('/certifications', [CertificationController::class, 'index'])->name('certifications.index');
Route::get('/certifications/export-pdf/{id}', [CertificationController::class, 'exportPdf'])->name('certifications.exportPdf');


