<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kategori_berita;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = kategori_berita::all();
        return view('admin.kategori_berita.index', compact('kategori'));
    }

    public function create()
    {
        return view('admin.kategori_berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
        ],
            [
                'kategori.required' => 'Kategori Tidak Boleh Kosong',
        ]);

        $kategori = $request->kategori;

        $data = new kategori_berita;
        $data->kategori = $kategori;

        if ($data->save()) {
            return redirect('/kategori-berita')->with('success', 'Data Berhasil Ditambah');
        } else {
            return redirect('/kategori-berita')->with('gagal', 'Data Gagal Ditambah');
        }
        

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = kategori_berita::find($id);
        return view('admin.kategori_berita.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
        ],
            [
                'kategori.required' => 'Kategori Tidak Boleh Kosong',
        ]);

        $kategori = $request->kategori;

        $data = kategori_berita::find($request['id']);
        $data->kategori = $kategori;

        if ($data->save()) {
            return redirect('/kategori-berita')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect('/kategori-berita')->with('gagal', 'Data Gagal Diupdate');
        }

    }

    public function destroy($id)
    {
        $data = kategori_berita::find($id);
        if ($data->delete()) {
            return redirect('/kategori-berita')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect('/kategori-berita')->with('gagal', 'Data Gagal Dihapus');
        }
    }
}
