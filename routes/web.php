<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\KegiatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\Kegiatan_amanController;
use App\Http\Controllers\admin\Anggota_amanController;
Use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\admin\Kader_amanController;
use App\Http\Controllers\admin\MapsController;
use App\Http\Controllers\admin\PolygonController;
use App\Http\Controllers\app\AppController;
use App\Http\Controllers\chart\ChartMassenrempulu;
use App\Http\Controllers\KomChartController;
use App\Http\Controllers\chart\ChartGowa;
use App\Http\Controllers\chart\ChartMajene;
use App\Http\Controllers\chart\ChartMamasa;
use App\Http\Controllers\chart\ChartMaros;
use App\Http\Controllers\chart\ChartSidrap;
use App\Http\Controllers\chart\ChartSinjai;
use App\Http\Controllers\chart\ChartToraya;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\admin\BeritaController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\TagController;
use Illuminate\Support\Facades\App;

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [AppController::class, 'index']);
Route::get('selengkapnya/{id}', [AppController::class, 'detailKegiatan']);
Route::get('semua-berita', [AppController::class, 'SemuaBerita']);
Route::get('wilayah-adat', [AppController::class, 'petaWilayah']);

Route::get('pd-gowa', [AppController::class, 'gowa']);
Route::get('pd-maros', [AppController::class, 'maros']);
Route::get('pd-majene', [AppController::class, 'majene']);
Route::get('pd-mamasa', [AppController::class, 'mamasa']);
Route::get('pd-massenrempulu', [AppController::class, 'massenrempulu']);
Route::get('pd-sidrap', [AppController::class, 'sidrap']);
Route::get('pd-sinjai', [AppController::class, 'sinjai']);
Route::get('pd-toraya', [AppController::class, 'toraya']);

// Route::get('login', [LoginController::class, 'index'])->name('login');
Route::controller(LoginController::class)->group(function (){
    Route::get('login', 'index')->name('login');
    Route::post('login/proseslogin', 'proseslogin');
    Route::get('logout', 'logout');
    Route::get('register-user', 'register_user');
    Route::post('create-user', 'create_user');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {

        Route::get('register', [LoginController::class, 'register']);
        Route::post('login/create', [LoginController::class, 'create']);

        Route::get('home', [DashboardController::class, 'index']);

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

        // chart
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

        // berita
        Route::get('berita', [BeritaController::class, 'index']);
        Route::get('berita/create', [BeritaController::class, 'create']);
        Route::post('berita/store', [BeritaController::class, 'store']);
        Route::get('berita/edit/{id}', [BeritaController::class, 'edit']);
        Route::post('berita/update', [BeritaController::class, 'update']);
        Route::delete('berita/delete/{id}', [BeritaController::class, 'destroy']);

        // kategori
        Route::get('kategori-berita', [KategoriController::class, 'index']);
        Route::get('kategori-berita/create', [KategoriController::class, 'create']);
        Route::post('kategori-berita/store', [KategoriController::class, 'store']);
        Route::get('kategori-berita/edit/{id}', [KategoriController::class, 'edit']);
        Route::post('kategori-berita/update', [KategoriController::class, 'update']);
        Route::delete('kategori-berita/delete/{id}', [KategoriController::class, 'destroy']);

        // tag
        Route::get('tag-berita', [TagController::class, 'index']);
        Route::get('tag-berita/create', [TagController::class, 'create']);
        Route::post('tag-berita/store', [TagController::class, 'store']);
        Route::get('tag-berita/edit/{slug}', [TagController::class, 'edit']);
        Route::post('tag-berita/update', [TagController::class, 'update']);
        Route::delete('tag-berita/delete/{slug}', [TagController::class, 'destroy']);

    });
    Route::group(['middleware' => ['cekUserLogin:2']], function () {

        Route::get('dashboard', [HomeController::class, 'peta_wilayah']);
        Route::get('detail-wilayah/{id}', [MapsController::class, 'detail']);

        Route::get('orong', [DashboardController::class, 'orong']);
        Route::get('chart', [KomChartController::class, 'index']);
        Route::get('Massenrempulu', [ChartMassenrempulu::class, 'massenrempulu']);
        Route::get('aman-gowa', [ChartGowa::class, 'gowa']);
        Route::get('majene', [ChartMajene::class, 'majene']);
        Route::get('mamasa', [ChartMamasa::class, 'mamasa']);
        Route::get('maros', [ChartMaros::class, 'maros']);
        Route::get('sidrap', [ChartSidrap::class, 'sidrap']);
        Route::get('sinjai', [ChartSinjai::class, 'sinjai']);
        Route::get('toraya', [ChartToraya::class, 'toraya']);

        Route::get('data-kader-aman', [HomeController::class, 'kader']);
        Route::get('data-kader-aman/view/{id}', [Kader_amanController::class, 'view']);

        Route::get('daftar-kegiatan-aman', [HomeController::class, 'kegiatan']);


    });

});
