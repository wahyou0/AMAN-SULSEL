<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\aktivitas_kader;
use App\Models\tabel_anggota;
use Illuminate\Http\Request;
use DB;

class Aktivitas_kaderController extends Controller
{
    
    public function index()
    {
        $aktivitas = aktivitas_kader::all();
        
        return view('admin.aktivitas_kader.index', compact('aktivitas'));
    }

  
    public function create()
    {
        $kader = tabel_anggota::all();

        return view('admin.aktivitas_kader.create', compact('kader'));
    }

    
    public function store(Request $request)
    {
        $model = $request->all();
        // $kader = $model['id_kader'];
        $data = tabel_anggota::where('id',$model['id_kader'])->first();

        aktivitas_kader::create([
            'id_kader' => $model['id_kader'],
            'nama_kader' => $data['nama_lengkap'],
            'status_kader' => $model['status_kader'],
            'keterangan' => $model['keterangan'],
        ]);

        return redirect('/aktivitas_kader')->with('success', 'Data Berhasil ditambah');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $data = aktivitas_kader::find($id);
        $kader = tabel_anggota::all();
        
        return view('admin.aktivitas_kader.edit', compact('data','kader'));
    }

    
    public function update(Request $request)
    {
        $input = $request->all();
        $kader = tabel_anggota::where('id',$input['id_kader'])->first();

        $data = aktivitas_kader::findOrFail($input['id']);
        $data->id_kader = $request->id_kader;
        $data->nama_kader = $kader->nama_lengkap;
        $data->status_kader = $request->status_kader;
        $data->keterangan = $request->keterangan;
        
        if ($data->save()) {
            return redirect('/aktivitas_kader')->with('success', 'Edit Data Berhasil');
        }
        else{
            return Redirect('/aktivitas_kader')->with('gagal', 'Edit Data Gagal');
        }
        
    }

    
    public function destroy($id)
    {
        $data = aktivitas_kader::find($id);
        if ($data->delete()) {
            return redirect('/aktivitas_kader')->with('success', 'Data Kegiatan Telah di Hapus');
        } else {
            return back()->with(['Gagal', 'hapus Data Kegiatan gagal']);
        }
    }
}
