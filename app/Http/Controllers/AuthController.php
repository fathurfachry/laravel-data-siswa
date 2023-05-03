<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Hash;


class AuthController extends Controller
{
    public function login() {

        if (auth()->check()) {
        return redirect('siswa');
            }else {
                return view('auth.login');
            }
    }

    public function authenticate(Request $request) {

        //mengambil data yang diinputkan dari form login
        $credentials = $request->only('email', 'password');

        // mengecek apa kombinasi email dan password pada $credentials sama/cocok dengan data pada database
        if(Auth::attempt($credentials)) {
            return redirect('siswa');
        } else {
            // kalau data tidak cocok maka menampilkan error_message
            return redirect('login')->with('error_message', 'Awikwok salah');
        }
    }

    public function register_form() {

        if (auth()->check()) {
        return redirect('siswa');
            }else {
                return view('auth.register');
            }

    }

    public function register(Request $request) {
        
        $request -> validate([

            'name' => 'required|min:6|max:15',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12|confirmed'

        ]);

        //proses pendafataran user baru

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        return redirect('login');
    }

    public function logout() {
        //menghapus semua data yang disimpan didalam sesi
        session::flush();
        //proses logout / keluar dari sistem
        Auth::logout();

        return redirect('login');
    }
}
