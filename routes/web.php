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
use App\Http\Controllers\admin\MapsController;
use App\Http\Controllers\admin\PolygonController;
use App\Http\Controllers\chart\ChartMassenrempulu;
use App\Http\Controllers\KomChartController;
use App\Http\Controllers\chart\ChartGowa;
use App\Http\Controllers\chart\ChartMajene;
use App\Http\Controllers\chart\ChartMamasa;
use App\Http\Controllers\chart\ChartMaros;
use App\Http\Controllers\chart\ChartSidrap;
use App\Http\Controllers\chart\ChartSinjai;
use App\Http\Controllers\chart\ChartToraya;

Route::get('/', function () {
    return view('login');
});



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

        Route::get('home', [DashboardController::class, 'index']);

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


        Route::get('orong', [DashboardController::class, 'orong']);
        Route::get('chart', [KomChartController::class, 'index']);
        Route::get('AMAN-Massenrempulu', [ChartMassenrempulu::class, 'massenrempulu']);
        Route::get('chart-aman-gowa', [ChartGowa::class, 'gowa']);
        Route::get('chart-majene', [ChartMajene::class, 'majene']);
        Route::get('chart-mamasa', [ChartMamasa::class, 'mamasa']);
        Route::get('chart-maros', [ChartMaros::class, 'maros']);
        Route::get('chart-sidrap', [ChartSidrap::class, 'sidrap']);
        Route::get('chart-sinjai', [ChartSinjai::class, 'sinjai']);
        Route::get('chart-toraya', [ChartToraya::class, 'toraya']);

        Route::get('map', [MapsController::class, 'index']);
        Route::get('map/create', [MapsController::class, 'create']);
        Route::post('map/store', [MapsController::class, 'store']);
        Route::get('marker/tabel', [MapsController::class, 'tableMarker']);
        Route::get('marker/edit/{id}', [MapsController::class, 'edit']);
        Route::post('marker/update', [MapsController::class, 'update']);
        Route::delete('marker/delete/{id}', [MapsController::class, 'destroy']);
        Route::get('detail/{id}', [MapsController::class, 'detail']);

        Route::get('pd/{id}', [MapsController::class, 'getKomunitas']);
        // Route::get('peta', [MapsController::class, 'peta']);
        // Route::post('draw', [MapsController::class, 'savedraw']);

        Route::get('draw', [PolygonController::class, 'index']);
        Route::post('draw/store', [PolygonController::class, 'store']);
        Route::get('draw/edit/{id}', [PolygonController::class, 'edit']);
        Route::post('draw/update', [PolygonController::class, 'update']);
        Route::get('draw/tabel', [PolygonController::class, 'tabel']);
        Route::delete('draw/delete/{id}', [PolygonController::class, 'destroy']);

        Route::get('daftar-user', [LoginController::class, 'daftarUser']);
        Route::delete('daftar-user/delete/{id}', [LoginController::class, 'destroy']);

    });
});


        Route::get('aktivitas_kader', [Aktivitas_kaderController::class, 'index']);
        Route::get('aktivitas_kader/create', [Aktivitas_kaderController::class, 'create']);
        Route::post('aktivitas_kader/store', [Aktivitas_kaderController::class, 'store']);
        Route::get('aktivitas_kader/edit/{id}', [Aktivitas_kaderController::class, 'edit']);
        Route::post('aktivitas_kader/update', [Aktivitas_kaderController::class, 'update']);
        Route::delete('aktivitas_kader/delete/{id}', [Aktivitas_kaderController::class, 'destroy']);
