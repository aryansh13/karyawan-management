<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

Route::middleware('auth:sanctum')->get('/api/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('karyawan', KaryawanController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/cuti', [DashboardController::class, 'cutiKaryawan'])->name('cuti');
    Route::get('/cutiKaryawan', [KaryawanController::class, 'cutiKaryawan']);
    Route::get('/karyawanBaru', [KaryawanController::class, 'karyawanBaru']);
});

Route::post('/login', [KaryawanController::class, 'login']);

