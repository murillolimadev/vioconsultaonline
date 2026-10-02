<?php

use App\Http\Controllers\admin\VioController;
use App\Http\Controllerss\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //news

    Route::get('/', [VioController::class, 'index'])->name('home.pages.crlv.index');
    Route::get('gerar/atpve/', [VioController::class, 'atpve'])->name('home.pages.atpve.index');
    Route::get('CRLV-Verde/', [VioController::class, 'verde'])->name('home.pages.crlv.verde');
    Route::get('recibo/dut/', [VioController::class, 'dut'])->name('home.pages.dut.index');

});



require __DIR__.'/auth.php';
