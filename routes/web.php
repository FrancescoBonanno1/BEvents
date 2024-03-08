<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OperatorController as AdminOperatorController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MyMessageController;
use App\Http\Controllers\MyReviewController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\OperatorSponsorshipsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;

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
Route::get('/pay', function () {
    return view('payment_form');
});

Route::get('/checkout', [PaymentController::class, 'showPaymentPage'])->name('checkout');
Route::get('/payment-form', [PaymentController::class, 'showPaymentPage'])->name('payment-form.show');
Route::get('/client-token', [PaymentController::class, 'getClientToken']);
Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('process-payment');

Route::get('/dashboard', [OperatorController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Rotte per la gestione degli operatori
    Route::resource('operators', AdminOperatorController::class);
    Route::resource("operator-sponsorships", OperatorSponsorshipsController::class);

    Route::get("/my-messages/{operator_id}", [MyMessageController::class, "index"])->name("my-messages");

    Route::get("/my-review/{operator_id}", [MyReviewController::class, "index"])->name("my-reviews");
});

Route::get("/message", [MessageController::class, "index"]);

Route::get("/review", [ReviewController::class, "index"]);

require __DIR__ . '/auth.php';
