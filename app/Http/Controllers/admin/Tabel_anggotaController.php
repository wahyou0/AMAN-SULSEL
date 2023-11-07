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
        return redirect('/anggota');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
