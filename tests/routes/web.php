<?php

use App\Http\Controllers\VioController;
use Illuminate\Support\Facades\Route;


Route::get('/', [VioController::class, 'index'])->name('home.pages.crlv.index');
Route::get('CRLV-Verde/', [VioController::class, 'verde'])->name('home.pages.crlv.verde');
Route::get('recibo/dut/', [VioController::class, 'dut'])->name('home.pages.dut.index');
Route::get('gerar/atpve/', [VioController::class, 'atpve'])->name('home.pages.atpve.index');
