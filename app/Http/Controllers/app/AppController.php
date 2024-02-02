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
        $totalpopulasi = anggota_aman::select(DB::raw("SUM(jml_perempuan) + SUM(jml_laki_laki) as totalpopulasi"))->pluck('totalpopulasi');
        $indikatif = anggota_aman::select(DB::raw("SUM(luas_indikatif) as indikatif"))->pluck('indikatif');
        $pemetaan = anggota_aman::select(DB::raw("SUM(luas_pemetaan) as pemetaan"))->pluck('pemetaan');
        $hutan_adat = anggota_aman::select(DB::raw("SUM(hutan_adat) as hutan_adat"))->pluck('hutan_adat');
        $total_wilayah = anggota_aman::select(DB::raw("SUM(luas_indikatif) + SUM(luas_pemetaan) as total_wilayah"))->pluck('total_wilayah');
        // $profil = anggota_aman::select(DB::raw("SUM(profil) as profil"))->where('profil','Lengkap')->pluck('profil');
        // $perda = anggota_aman::select(DB::raw("SUM(perda) as perda"))->where('perda','Sudah Ada')->pluck('perda');
        // $sk_bupati = anggota_aman::select(DB::raw("SUM(sk_bupati) as sk_bupati"))->where('sk_bupati','Sudah Ada')->pluck('sk_bupati');
        // $perbub = anggota_aman::select(DB::raw("SUM(perbub) as perbub"))->where('perbub','Sudah Ada')->pluck('perbub');
        $perempuan_aman = anggota_aman::select(DB::raw("SUM(perempuan_aman) as perempuan_aman"))->pluck('perempuan_aman');
        $kader_pemula = anggota_aman::select(DB::raw("SUM(kader_pemula) as kader_pemula"))->pluck('kader_pemula');
        $kader_penggerak = anggota_aman::select(DB::raw("SUM(kader_penggerak) as kader_penggerak"))->pluck('kader_penggerak');
        $kader_pemimpin = anggota_aman::select(DB::raw("SUM(kader_pemimpin) as kader_pemimpin"))->pluck('kader_pemimpin');
        $total_kader = anggota_aman::select(DB::raw("SUM(kader_pemimpin) + SUM(kader_penggerak) + SUM(kader_pemula) as total_kader"))->pluck('total_kader');
        $bpan_laki_laki = anggota_aman::select(DB::raw("SUM(bpan_laki_laki) as bpan_laki_laki"))->pluck('bpan_laki_laki');
        $bpan_perempuan = anggota_aman::select(DB::raw("SUM(bpan_perempuan) as bpan_perempuan"))->pluck('bpan_perempuan');
        $total_bpan = anggota_aman::select(DB::raw("SUM(bpan_perempuan) + SUM(bpan_laki_laki) as total_bpan"))->pluck('total_bpan');
        $komunitas = anggota_aman::all()->count();
        $perda = anggota_aman::where('perda','Sudah Ada')->count();
        $sk_bupati = anggota_aman::where('sk_bupati','Sudah Ada')->count();
        $perbub = anggota_aman::where('perbub','Sudah Ada')->count();
        $profil = anggota_aman::where('profil','lengkap')->count();
        $belum_profil = anggota_aman::where('profil','Belum Lengkap')->count();
        $registrasi = anggota_aman::where('status_brwa','Teregistrasi')->count();
        $verifikasi = anggota_aman::where('status_brwa','Terverifikasi')->count();
        $sertifikasi = anggota_aman::where('status_brwa','Tersertifikasi')->count();

        // $per = DB::table('anggota_aman')
        //     ->select('pengurus_daerah')
        //     ->where('perda','Sudah Ada')
        //     ->groupBy('pengurus_daerah')
        //     ->get();

        $total_produkhukum = $perda + $sk_bupati + $perbub;
        $total_status = $registrasi + $verifikasi + $sertifikasi;

        $nama_mark = kordinat::all();
        $draw = peta_wilayah::select(DB::raw("polygon as draw"))->pluck('draw');

        return view('app.layout.index', compact('laki',
                                                'perempuan',
                                                'indikatif',
                                                'pemetaan',
                                                'komunitas',
                                                'totalpopulasi',
                                                'nama_mark',
                                                'hutan_adat',
                                                'total_wilayah',
                                                'profil',
                                                'perda',
                                                'sk_bupati',
                                                'perbub',
                                                'perempuan_aman',
                                                'kader_pemula',
                                                'kader_penggerak',
                                                'kader_pemimpin',
                                                'total_kader',
                                                'bpan_laki_laki',
                                                'bpan_perempuan',
                                                'total_bpan',
                                                'belum_profil',
                                                'registrasi',
                                                'verifikasi',
                                                'sertifikasi',
                                                'total_produkhukum',
                                                'total_status',
                                                'draw'));
    }

    public function detailKegiatan()
    {
        return view('app.layout.detail_kegiatan');
    }

    public function petaWilayah()
    {
        $nama_mark = kordinat::all();
        $draw = peta_wilayah::select(DB::raw("polygon as draw"))->pluck('draw');

        return view('app.layout.peta_wilayah_adat', compact('nama_mark','draw'));
    }

    public function gowa()
    {
        $anggota = anggota_aman::all()->where('pengurus_daerah','AMAN Gowa');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Gowa')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Gowa')->pluck('peta');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Gowa')->pluck('kom');

        return view('app.pd.gowa', compact('indikatif',
                                            'kom',
                                            'anggota',
                                            'peta'));
    }

    public function maros()
    {
        $maros = anggota_aman::all()->where('pengurus_daerah','AMAN Maros');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Maros')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Maros')->pluck('peta');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Maros')->pluck('kom');

        return view('app.pd.maros', compact('maros','indikatif','peta','kom'));
    }

    public function majene()
    {
        $majene = anggota_aman::all()->where('pengurus_daerah','AMAN Majene');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Majene')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Majene')->pluck('peta');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Majene')->pluck('kom');

        return view('app.pd.majene', compact('majene','indikatif','peta','kom'));
    }

    public function mamasa()
    {
        $mamasa = anggota_aman::all()->where('pengurus_daerah','AMAN Mamasa');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Mamasa')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Mamasa')->pluck('peta');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Mamasa')->pluck('kom');

        return view('app.pd.mamasa', compact('mamasa','indikatif','peta','kom'));
    }

    public function massenrempulu()
    {
        $massenrempulu = anggota_aman::all()->where('pengurus_daerah','AMAN Massenrempulu');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Massenrempulu')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Massenrempulu')->pluck('peta');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Massenrempulu')->pluck('kom');

        return view('app.pd.massenrempulu', compact('massenrempulu','indikatif','peta','kom'));
    }

    public function sidrap()
    {
        $sidrap = anggota_aman::all()->where('pengurus_daerah','AMAN Sidrap');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Sidrap')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Sidrap')->pluck('peta');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Sidrap')->pluck('kom');

        return view('app.pd.sidrap', compact('sidrap','indikatif','peta','kom'));
    }

    public function sinjai()
    {
        $sinjai = anggota_aman::all()->where('pengurus_daerah','AMAN Sinjai');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Sinjai')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Sinjai')->pluck('peta');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Sinjai')->pluck('kom');

        return view('app.pd.sinjai', compact('sinjai','indikatif','peta','kom'));
    }

    public function toraya()
    {
        $toraya = anggota_aman::all()->where('pengurus_daerah','AMAN Toraya');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Toraya')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Toraya')->pluck('peta');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Toraya')->pluck('kom');

        return view('app.pd.toraya', compact('toraya','indikatif','peta','kom'));
    }
    
}
