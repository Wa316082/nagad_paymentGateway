<?php

use App\Http\Controllers\NagadPaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/nagad-pay', [NagadPaymentController::class, 'nagadPay'])->name('nagad.pay');
Route::get('/nagad-callback', [NagadPaymentController::class, 'callback'])->name('nagad.payment');
