<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anggota_aman;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $anggota = anggota_aman::all()->only('orong');
        // $kom = anggota_aman::select('komunitas')->get();
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->pluck('kom');
        $luas = anggota_aman::select(DB::raw("luas_indikatif as luas"))->pluck('luas');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->pluck('peta');

        
        $laki = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki"))->pluck('laki');
        $wanita = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita"))->pluck('wanita');
        $total = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total"))->pluck('total');

        
        // $lakikom = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as lakikom"))->where('komunitas','orong')->pluck('lakikom');

        $ambil = anggota_aman::select('jml_laki_laki')->count();
        // $coba = anggota_aman::groupBy('komunitas')->get();
        // $kom = DB::table('anggota_aman')->select('komunitas')->groupBy('komunitas')->get();
        // $tes = anggota_aman::luasindikatif();
        // $data = anggota_aman::where('komunitas',$model['id_kader'])->first();
        // for ($i = 1; $i <= $kom; $i++){
        // $coba[] = $anggota->where('jml_laki_laki','Orong')->count();
        // }
            

        $dataluas[] = ($luas);
        $datapeta[] = $peta;
        $datakom[] = $kom;
        $jml = $laki->concat($wanita);
        $tambah = $jml->concat($total);
        
        // dd($lakikom);

        return view('admin.home', compact('kom', 'dataluas','datapeta', 'datakom', 'luas', 'peta','laki','wanita','jml','total','tambah'));
    }

    public function orong()
    {
        $lakikom = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as lakikom"))->where('komunitas','orong')->pluck('lakikom');
    }
}
