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

        $total_produkhukum = $perda + $sk_bupati + $perbub;
        $total_status = $registrasi + $verifikasi + $sertifikasi;

        

        $nama_mark = kordinat::all();
        $draw = peta_wilayah::select(DB::raw("polygon as draw"))->pluck('draw');
        // dd($total_wilayah);

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
}
