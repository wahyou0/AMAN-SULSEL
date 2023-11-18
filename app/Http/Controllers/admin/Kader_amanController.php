<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kader_aman;
use App\Models\kegiatan_aman;
use App\Models\anggota_aman;
use DB;

class Kader_amanController extends Controller
{
    
    public function index()
    {
        $kader = kader_aman::all();

        return view('admin.kader_aman.index', compact('kader'));
    }

    
    public function create()
    {
        $anggota = anggota_aman::all();
        $kegiatan = kegiatan_aman::all();

        return view('admin.kader_aman.create', compact('anggota','kegiatan'));
    }

    
    public function store(Request $request)
    {
        $model = $request->all();

        // $input['kegiatan_diikuti'] = $request->input('kegiatan_diikuti');
        
        
        
        foreach ($request->input('kegiatan_diikuti') as $key => $value) {
            $input = [
                'nama_lengkap' => $request['nama_lengkap'],
                'nama_panggilan' => $request['nama_panggilan'],
                'tempat_lahir' => $request['tempat_lahir'],
                'tgl_lahir' => $request['tgl_lahir'],
                'jenis_kelamin' => $request['jenis_kelamin'],
                'nama_komunitas' => $request['nama_komunitas'],
                'alamat' => $request['alamat'],
                'no_hp' => $request['no_hp'],
                'email' => $request['email'],
                'kegiatan_diikuti' => $value,
                'status_kader' => $request['status_kader'],
                'keterangan' => $request['keterangan'],
            ];
            kader_aman::create($input);
        }

        

        return redirect('/kader_aman')->with('success', 'Kegiatan AMAN Berhasil di Tambah');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $data = kader_aman::find($id);

        $anggota = anggota_aman::all();
        $kegiatan = kegiatan_aman::all();
        
        return view('admin.kader_aman.edit', compact('data','anggota','kegiatan'));
    }

    
    public function update(Request $request)
    {

        $a = $request->input('kegiatan_diikuti');

        $data = kader_aman::findOrFail($request['id']);
        $data->nama_lengkap = $request->nama_lengkap;
        $data->nama_panggilan = $request->nama_panggilan;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->nama_komunitas = $request->nama_komunitas;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->email = $request->email;
        $data->kegiatan_diikuti = $request->kegiatan_diikuti;
        $data->status_kader = $request->status_kader;
        $data->keterangan = $request->keterangan;

        if ($data->save()){
            return Redirect('/kader_aman')->with('success', 'Edit Data Berhasil');
        }
        else{
            return Redirect('/kader_aman')->with('gagal', 'Edit Data Gagal');
        }
    }

    
    public function destroy($id)
    {
        $data = kader_aman::find($id);
        if ($data->delete()) {
            return redirect('/kader_aman')->with('success', 'Data Telah di Hapus');
        } else {
            return back()->with(['gagal', 'Hapus Data Gagal']);
        }
    }
}
