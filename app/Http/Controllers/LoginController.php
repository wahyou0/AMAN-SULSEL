<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        if($user = Auth::user()){
            if ($user->level == '1') {
                return redirect()->intended('home');
            } elseif ($user->level == '2') {
                return redirect()->intended('kegiatan');
            }
        }

        return view('login');
    }

    public function proseslogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]    
        );

        $kredensial = $request->only('username','password');

        if(Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == '1') {
                return redirect()->intended('home');
            } elseif ($user->level == '2') {
                return redirect()->intended('kegiatan');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'username atau password anda salah',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function register(Request $request) 
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'email.required' => '@gmail.com',
                'password.required' => 'password tidak boleh kosong',
                'password.minlength' => 'password minimal 8 karakter',
                
            ],  
        );

        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'level' => $request['level'],
        ]);
        return redirect('/home')->with('succes', 'Registrasi Admin Berhasil');
    }

}
