<?php

use App\Http\Controllers\VagaController;
use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');








Route:: get('/vagas', [VagaController::class, 'index'])->name('vagas.index');
Route:: get('/registrarvagas', [VagaController::class, 'create'])->name('vagas.create');
Route:: post('/vagas', [VagaController::class, 'store'])->name('vagas.store');
Route:: get('/vagas/minhasvagas', [CvController::class, 'index'])->name('vagas.minhasvagas');






Route:: get('/cvs', [CvController::class, 'index'])->name('cvs.index');
Route:: get('/registrarcvs', [CvController::class, 'create'])->name('cvs.create');
Route:: post('/cvs', [CvController::class, 'store'])->name('cvs.store');
Route:: get('/cvs/meuscvs', [CvController::class, 'index'])->name('cvs.meuscvs');



require __DIR__.'/auth.php';
