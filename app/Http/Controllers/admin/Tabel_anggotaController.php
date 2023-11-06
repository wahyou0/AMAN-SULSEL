<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\tabel_anggota;
use Illuminate\Http\Request;

class Tabel_anggotaController extends Controller
{
    
    public function index()
    {
        $inventaris = tabel_anggota::all();
        return view('admin.dashboard', compact('inventaris'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
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
