<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VacantePdfController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\AdminProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', [VacanteController::class, 'index'])->middleware(['auth', 'verified'])->name('vacantes.index');
Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home.index');
Route::get('/mapa', [HomeController::class, 'mapa'])->middleware(['auth', 'verified'])->name('home.mapa');


Route::get('/vacantes/create', [VacanteController::class, 'create'])->middleware(['auth', 'verified'])->name('vacantes.create');
Route::get('/vacantes/{vacante}/edit', [VacanteController::class, 'edit'])->middleware(['auth', 'verified'])->name('vacantes.edit');
Route::get('/vacantes/{vacante}', [VacanteController::class, 'show'])->name('vacantes.show');

Route::resource('empresas', EmpresaController::class)->middleware('auth');

Route::get('/vacantes/{id}/pdf', [VacantePdfController::class, 'generarPdf'])->name('vacantes.pdf');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Administrador de perfiles
Route::resource('adminprofile', AdminProfileController::class)->middleware('auth');

require __DIR__.'/auth.php';
