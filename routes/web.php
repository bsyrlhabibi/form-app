<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagianSatuController;
use App\Http\Controllers\BagianSatuIndexController;

Route::get('/', function(){
    return view('layout.master');
});

Route::get('/form', [BagianSatuController::class, 'showForm'])->name('bagiansatu.showForm');
Route::post('/store', [BagianSatuController::class, 'store'])->name('bagiansatu.store');

Route::get('/viewdata', [BagianSatuIndexController::class, 'index'])->name('viewdata.index');

Route::get('viewdata/export-pdf/{id}', [BagianSatuIndexController::class, 'exportPdf'])->name('viewdata.exportPdf');


