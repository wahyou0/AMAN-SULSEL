<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berita;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    
    public function index()
    {
        $berita = berita::all();
        return view('admin.berita.index', compact('berita'));  
    }

    
    public function create()
    {
        return view('admin.berita.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'mimes:png,jpg,jpeg|image|max:20048'
        ],
            [
                'judul.required' => 'Judul Tidak Boleh kosong',
                'isi.required' => 'Isi berita Tidak Boleh kosong'
        ]);

        $judul = $request->judul;
        $kategori = $request->kategori;
        $tag = $request->tag;
        $tanggal = $request->tanggal;
        $tempat = $request->tempat;
        $penulis = $request->penulis;
        $isi = $request->isi;
        $slug = Str::slug($request->judul);

        if($request->hasFile('foto')){
            $path = $request->file('foto')->store('uploads');
        }else{
            $path = '';
        }

        $data = new berita;
        $data->judul = $judul;
        $data->slug = $slug;
        $data->kategori = $kategori;
        $data->tag = $tag;
        $data->tanggal = $tanggal;
        $data->tempat = $tempat;
        $data->penulis = $penulis;
        $data->foto = $path;
        $data->isi = $isi;

        if ($data->save()){
            return redirect('/berita')->with('success', 'Berita AMAN Berhasil ditambah');
        }
        else{
            return Redirect('/berita')->with('gagal', 'Edit Data Gagal');
        }
        
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $data = berita::find($id);
        return view('admin.berita.edit', compact('data'));
    }

   
    public function update(Request $request)
    {
        $request->validate([
            'foto' => 'mimes:png,jpg,jpeg|image|max:20048'
        ]);

        $judul = $request->judul;
        $kategori = $request->kategori;
        $tag = $request->tag;
        $tanggal = $request->tanggal;
        $tempat = $request->tempat;
        $penulis = $request->penulis;
        $isi      = $request->isi;
        $slug = Str::slug($request->judul);

        $data = berita::find($request['id']);
        $cekfoto = $data->foto;

        if($request->hasFile('foto')){
            if ($cekfoto != null) {
                Storage::delete($cekfoto);
            }
            $path = $request->file('foto')->store('uploads');
        }else{
            $path = $data->foto;
        }

        $data->judul = $judul;
        $data->slug = $slug; 
        $data->kategori = $kategori;
        $data->tag = $tag;
        $data->tanggal = $tanggal;
        $data->tempat = $tempat;
        $data->penulis = $penulis;
        $data->foto = $path;
        $data->isi = $isi;

        if ($data->save()){
            return redirect('/berita')->with('success', 'Edit Data Berhasil');
        }
        else{
            return Redirect('/berita')->with('gagal', 'Edit Data Gagal');
        }

    }

   
    public function destroy($id)
    {
        $data = berita::find($id);
        $pathFoto = $data->foto;
        if ($pathFoto != null || $pathFoto != '') {
            Storage::delete($pathFoto);
        }
        if ($data->delete()) {
            return redirect('/berita')->with('success', 'Berita Telah di hapus');
        } else {
            return back()->with(['gagal', 'Hapus Data Gagal']);
        }
    }
}
