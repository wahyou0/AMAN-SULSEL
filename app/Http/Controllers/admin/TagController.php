<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\tag;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class TagController extends Controller
{
    public function index()
    {
        $tag = tag::all();

        return view('admin.tag.index', compact('tag'));
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tag_berita' => 'required',
        ],
            [
                'tag_berita.required' => 'tag Tidak Boleh Kosong',
        ]);

        $tag = $request->tag_berita;

        $data = new tag;
        $data->tag_berita = $tag;

        if ($data->save()) {
            return redirect('/tag-berita')->with('success', 'Data Berhasil Ditambah');
        } else {
            return redirect('/tag-berita')->with('gagal', 'Data Gagal Ditambah');
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($slug)
    {
        $data = tag::where('slug', $slug)->first();

        return view('admin.tag.edit', compact('data'));

    }

    public function update(Request $request)
    {
        $request->validate([
            'tag_berita' => 'required',
        ],
            [
                'tag_berita.required' => 'tag Tidak Boleh Kosong',
        ]);

        $tag = $request->tag_berita;
        $slug = SlugService::createSlug(tag::class, 'slug', $tag);

        $data = tag::find($request['id']);
        $data->tag_berita = $tag;
        $data->slug = $slug;

        if ($data->save()) {
            return redirect('/tag-berita')->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect('/tag-berita')->with('gagal', 'Data Gagal Diubah');
        }
    }

    public function destroy($slug)
    {
        $data = tag::where('slug', $slug)->first();

        if ($data->delete()) {
            return redirect('/tag-berita')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect('/tag-berita')->with('gagal', 'Data Gagal Dihapus');
        }
        
    }
}
