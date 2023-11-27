<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Tabel_anggotaController;
use App\Http\Controllers\admin\KegiatanController;
use App\Http\Controllers\admin\Aktivitas_kaderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\Kegiatan_amanController;
use App\Http\Controllers\admin\Anggota_amanController;
Use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\admin\Kader_amanController;

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
    return view('login');
});

Route::get('home', [DashboardController::class, 'index']);

// Route::get('login', [LoginController::class, 'index'])->name('login');
Route::controller(LoginController::class)->group(function (){
    Route::get('login', 'index')->name('login');
    Route::post('login/proseslogin', 'proseslogin');
    Route::get('logout', 'logout');
    Route::get('register', 'register');
    Route::post('login/create', 'create');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {

        Route::get('anggota', [Tabel_anggotaController::class, 'index']);
        Route::get('anggota/create', [Tabel_anggotaController::class, 'create']);
        Route::post('anggota/store', [Tabel_anggotaController::class, 'store']);
        Route::get('anggota/edit/{id}', [Tabel_anggotaController::class, 'edit']);
        Route::post('anggota/update', [Tabel_anggotaController::class, 'update']);
        Route::delete('anggota/delete/{id}', [Tabel_anggotaController::class, 'destroy']);

        Route::get('kegiatan', [KegiatanController::class, 'index']);
        Route::get('kegiatan/create', [KegiatanController::class, 'create']);
        Route::post('kegiatan/store', [KegiatanController::class, 'store']);
        Route::get('kegiatan/edit/{id}', [KegiatanController::class, 'edit']);
        Route::post('kegiatan/update', [KegiatanController::class, 'update']);
        Route::delete('kegiatan/delete/{id}', [KegiatanController::class, 'destroy']);
        Route::get('kegiatan/view/{id}', [KegiatanController::class, 'view']);

        Route::get('kegiatan_aman', [Kegiatan_amanController::class, 'index']);
        Route::get('kegiatan_aman/create', [Kegiatan_amanController::class, 'create']);
        Route::post('kegiatan_aman/store', [Kegiatan_amanController::class, 'store']);
        Route::get('kegiatan_aman/edit/{id}', [Kegiatan_amanController::class, 'edit']);
        Route::post('kegiatan_aman/update', [Kegiatan_amanController::class, 'update']);
        Route::delete('kegiatan_aman/delete/{id}', [Kegiatan_amanController::class, 'destroy']);

        Route::get('anggota_aman', [Anggota_amanController::class, 'index']);
        Route::get('anggota_aman/create', [Anggota_amanController::class, 'create']);
        Route::post('anggota_aman/store', [Anggota_amanController::class, 'store']);
        Route::get('anggota_aman/edit/{id}', [Anggota_amanController::class, 'edit']);
        Route::post('anggota_aman/update', [Anggota_amanController::class, 'update']);
        Route::delete('anggota_aman/delete/{id}', [Anggota_amanController::class, 'destroy']);

        Route::get('kader_aman', [Kader_amanController::class, 'index']);
        Route::get('kader_aman/create', [Kader_amanController::class, 'create']);
        Route::post('kader_aman/store', [Kader_amanController::class, 'store']);
        Route::get('kader_aman/edit/{id}', [Kader_amanController::class, 'edit']);
        Route::post('kader_aman/update', [Kader_amanController::class, 'update']);
        Route::delete('kader_aman/delete/{id}', [Kader_amanController::class, 'destroy']);
        Route::get('kader_aman/view/{id}', [Kader_amanController::class, 'view']);
    });
});


        Route::get('aktivitas_kader', [Aktivitas_kaderController::class, 'index']);
        Route::get('aktivitas_kader/create', [Aktivitas_kaderController::class, 'create']);
        Route::post('aktivitas_kader/store', [Aktivitas_kaderController::class, 'store']);
        Route::get('aktivitas_kader/edit/{id}', [Aktivitas_kaderController::class, 'edit']);
        Route::post('aktivitas_kader/update', [Aktivitas_kaderController::class, 'update']);
        Route::delete('aktivitas_kader/delete/{id}', [Aktivitas_kaderController::class, 'destroy']);
