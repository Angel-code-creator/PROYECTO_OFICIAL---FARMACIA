<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentoController;

Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Medicamentos
Route::get('medicamentos', [MedicamentoController::class, 'index'])->name('medicamentos.index');
Route::get('medicamentos/crear', [MedicamentoController::class, 'crear'])->name('medicamentos.crear');
Route::post('medicamentos', [MedicamentoController::class, 'guardar'])->name('medicamentos.guardar');
Route::get('medicamentos/{medicamento}/editar', [MedicamentoController::class, 'editar'])->name('medicamentos.editar');
Route::put('medicamentos/{medicamento}', [MedicamentoController::class, 'actualizar'])->name('medicamentos.actualizar');
Route::delete('medicamentos/{medicamento}', [MedicamentoController::class, 'eliminar'])->name('medicamentos.eliminar');});

require __DIR__.'/auth.php';