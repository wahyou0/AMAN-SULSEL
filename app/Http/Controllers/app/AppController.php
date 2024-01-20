<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\anggota_aman;
use App\Models\kordinat;
use App\Models\peta_wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index()
    {
        $laki = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki"))->pluck('laki');
        $perempuan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan"))->pluck('perempuan');
        $totalpopulasi = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as totalpopulasi"))->pluck('totalpopulasi');
        $indikatif = anggota_aman::select(DB::raw("SUM(luas_indikatif) as indikatif"))->pluck('indikatif');
        $pemetaan = anggota_aman::select(DB::raw("SUM(luas_pemetaan) as pemetaan"))->pluck('pemetaan');
        $komunitas = anggota_aman::all()->count();

        $nama_mark = kordinat::all();
        $draw = peta_wilayah::select(DB::raw("polygon as draw"))->pluck('draw');
        // dd($komunitas);

        return view('app.layout.index', compact('laki','perempuan','indikatif','pemetaan','komunitas','totalpopulasi','nama_mark','draw'));
    }
}
