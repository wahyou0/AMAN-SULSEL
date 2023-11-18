<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anggota_aman;

class DashboardController extends Controller
{
    public function index()
    {
        $data = anggota_aman::all();

        return view('admin.home', compact('data'));
    }
}
