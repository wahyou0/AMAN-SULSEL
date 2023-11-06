<?php

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
    return view('admin.dashboard');
});

        Route::get('anggota', [Tabel_anggotaController::class, 'index']);
        Route::get('anggota/create', [Tabel_anggotaController::class, 'create']);
        Route::post('anggota/store', [Tabel_anggotaController::class, 'store']);
        Route::get('anggota/edit/{id}', [Tabel_anggotaController::class, 'edit']);
        Route::post('anggota/update', [Tabel_anggotaController::class, 'update']);
        Route::delete('anggota/{id}', [Tabel_anggotaController::class, 'destroy']);
