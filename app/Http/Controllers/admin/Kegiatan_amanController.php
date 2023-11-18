<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kegiatan_aman;

class Kegiatan_amanController extends Controller
{
    
    public function index()
    {
        $kegiatan = kegiatan_aman::all();
        
        return view('admin.kegiatan_aman.index', compact('kegiatan'));
    }

    public function create()
    {
        return view('admin.kegiatan_aman.create');
    }

   
    public function store(Request $request)
    {
        $model = $request->all();

        kegiatan_aman::create($model);
        return redirect('/kegiatan_aman')->with('success', 'Kegiatan AMAN Berhasil diTambah');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $data = kegiatan_aman::find($id);
        
        return view('admin.kegiatan_aman.edit', compact('data'));
    }

   
    public function update(Request $request)
    {
        $input = $request->all();

        if (kegiatan_aman::find($input['id'])->update($input)){
            return Redirect('/kegiatan_aman')->with('success', 'Edit Data Berhasil');
        }
        else{
            return Redirect('/kegiatan_aman')->with('gagal', 'Edit Data Gagal');
        }
    }

   
    public function destroy($id)
    {
        $data = kegiatan_aman::find($id);
        if ($data->delete()) {
            return redirect('/kegiatan_aman')->with('success', 'Data Telah di Hapus');
        } else {
            return back()->with(['gagal', 'Hapus Data Gagal']);
        }
    }
}
