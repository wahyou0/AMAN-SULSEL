<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\tabel_anggota;
use Illuminate\Http\Request;

class Tabel_anggotaController extends Controller
{
    
    public function index()
    {
        $anggota = tabel_anggota::all();
        
        return view('admin.anggota.index', compact('anggota'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $model = $request->all();

        tabel_anggota::create($model);
        return redirect('/anggota')->with('success', 'Anggota Berhasil di Tambah');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Request $request, $id)
    {
        $data = tabel_anggota::find($id);
        
        return view('admin.anggota.edit', compact('data'));
    }

   
    public function update(Request $request)
    {
        $input = $request->all();

        if (tabel_anggota::find($input['id'])->update($input)){
            return Redirect('/anggota')->with('success', 'Edit Data Berhasil');
        }
        else{
            return Redirect('/anggota')->with('gagal', 'Edit Data Gagal');
        }
    }

   
    public function destroy($id)
    {
        $data = tabel_anggota::find($id);
        if ($data->delete()) {
            return redirect('/anggota')->with('success', 'Data anggota Telah di Hapus');
        } else {
            return back()->with(['Gagal', 'hapus Data Anggota gagal']);
        }
    }
}
