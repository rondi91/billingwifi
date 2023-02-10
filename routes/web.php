<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('back.dashboard.index');
});

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/paket', [PaketController::class, 'index'])->name('paket.index');
Route::get('/billing', [BillingController::class, 'index'])->name('billing.index');
Route::get('/payment', [paymentController::class, 'index'])->name('payment.index');