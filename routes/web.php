<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OperatorController as AdminOperatorController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\OperatorSponsorshipsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', [OperatorController::class, 'index'])->name('homepage');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        //Siamo nel gruppo quindi:
        // - il percorso "/" diventa "admin/"
        // - il nome della rotta ->name("dashboard") diventa ->name("admin.dashboard")
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('operators', AdminOperatorController::class);
        Route::resource("operator-sponsorships", OperatorSponsorshipsController::class);

    // Rotte per la gestione degli operatori
    Route::get('/operators', [AdminOperatorController::class, 'index'])->name('operators.index');
    Route::get('/operators/create', [AdminOperatorController::class, 'create'])->name('operators.create');
    Route::post('/operators', [AdminOperatorController::class, 'store'])->name('operators.store');
    Route::get('/operators/{operator}/edit', [AdminOperatorController::class, 'edit'])->name('operators.edit');
    Route::put('/operators/{operator}', [AdminOperatorController::class, 'update'])->name('operators.update');
    Route::delete('/operators/{operator}', [AdminOperatorController::class, 'destroy'])->name('operators.destroy');
});

require __DIR__ . '/auth.php';


