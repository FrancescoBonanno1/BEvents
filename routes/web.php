<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OperatorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [OperatorController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Rotte per la gestione degli operatori
    Route::get('/operators', [OperatorController::class, 'index'])->name('operators.index');
    Route::get('/operators/create', [OperatorController::class, 'create'])->name('operators.create');
    Route::post('/operators', [OperatorController::class, 'store'])->name('operators.store');
    Route::get('/operators/{operator}/edit', [OperatorController::class, 'edit'])->name('operators.edit');
    Route::put('/operators/{operator}', [OperatorController::class, 'update'])->name('operators.update');
    Route::delete('/operators/{operator}', [OperatorController::class, 'destroy'])->name('operators.destroy');
});

require __DIR__ . '/auth.php';


