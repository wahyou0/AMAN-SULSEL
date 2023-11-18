<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kegiatan;
use App\Models\tabel_anggota;
use Illuminate\Http\Request;
use App\Models\kegiatan_aman;
use DB;

class KegiatanController extends Controller
{
    
    public function index()
    {
        $data = tabel_anggota::all();
        $kegiatan = kegiatan::all();
        
        return view('admin.kegiatan.index', compact('kegiatan','data'));
    }

    
    public function create()
    {
        $data = tabel_anggota::all();
        $kegiatan = kegiatan_aman::all();

        return view('admin.kegiatan.create', compact('data','kegiatan'));
    }

    
    public function store(Request $request)
    {
        $model = $request->all();
        $kader = $model['nama_kader'];
        // $data = DB::table('tabel_anggotas')->select('nama_lengkap')->where('id',$kader)->get();
        $data = tabel_anggota::where('id',$model['nama_kader'])->first();

        kegiatan::create([
            'id_kader' => $model['nama_kader'],
            'nama_kader' => $data['nama_lengkap'],
            'kegiatan' => $model['kegiatan'],
        ]);

        return redirect('/kegiatan')->with('success', 'Kegiatan Kader Berhasil di Tambah');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Request $request, $id)
    {
        $data = kegiatan::find($id);
        $kader = tabel_anggota::all();
        
        return view('admin.kegiatan.edit', compact('data','kader'));
    }

   
    public function update(Request $request)
    {
        $input = $request->all();
        $kader = tabel_anggota::where('id',$input['nama_kader'])->first();

        $data = kegiatan::findOrFail($input['id']);
        $data->id_kader = $request->nama_kader;
        $data->nama_kader = $kader->nama_lengkap;
        $data->kegiatan = $request->kegiatan;
        $data->save();
        return redirect('/kegiatan')->with('success', 'Edit Data Berhasil');

        
    }

    
    public function destroy($id)
    {
        $data = kegiatan::find($id);
        if ($data->delete()) {
            return redirect('/kegiatan')->with('success', 'Data Kegiatan Telah di Hapus');
        } else {
            return back()->with(['Gagal', 'hapus Data Kegiatan gagal']);
        }
    }
}
