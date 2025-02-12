<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\CapsuleController;
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


Route::controller(LoginRegisterController::class)->group(function() {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

// Public routes of capsule
Route::controller(CapsuleController::class)->group(function() {
//     Route::get('/capsules', 'index');
    Route::get('/capsules/{id}', 'show');

});


Route::middleware('auth:sanctum')->group( function () {
    Route::post('/logout', [LoginRegisterController::class, 'logout']);

    Route::controller(CapsuleController::class)->group(function() {
        Route::post('/capsules', 'index');
        Route::post('/capsules/create', 'store');
        Route::put('/capsules/{id}', 'update');

//         Route::delete('/capsules/{id}', 'destroy');
    });
});
