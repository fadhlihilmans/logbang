<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login; // Pake Model Login yang baru
use Illuminate\Support\Facades\Session; // Untuk simpan sesi manual

class SimpleAuthController extends Controller
{
    // Halaman Login
    public function index()
    {
        // Cek jika sudah login, langsung lempar ke home
        if (Session::has('login_id')) {
            return redirect()->route('home');
        }
        return view('login');
    }

    // PROSES LOGIN (Cek Manual ke Tabel Login)
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // Cari data di tabel 'login' yang email & passwordnya COCOK
        $data = Login::where('email', $request->email)
                     ->where('password', $request->password) // Bandingkan mentah-mentah
                     ->first();

        if ($data) {
            // Jika ketemu, simpan data sederhana ke Session
            Session::put('login_id', $data->id);
            Session::put('login_name', $data->name);
            
            return redirect()->route('home');
        } else {
            // Jika tidak ketemu
            return back()->withErrors(['email' => 'Email atau Password Salah!']);
        }
    }

    // Halaman Register
    public function register()
    {
        return view('register');
    }

    // PROSES REGISTER (Simpan ke Tabel Login)
    public function storeRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:login,email', // Cek unique di tabel 'login'
            'password' => 'required'
        ]);

        // Simpan CRUD biasa
        Login::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password // Masuk database apa adanya (123 tetap 123)
        ]);

        return redirect()->route('login')->with('success', 'Berhasil Daftar! Silakan Login.');
    }

    // Halaman Home
    public function home()
    {
        // Cek manual: Kalau gak punya sesi login, tendang balik
        if (!Session::has('login_id')) {
            return redirect()->route('login');
        }

        return view('home');
    }

    // Logout
    public function logout()
    {
        Session::flush(); // Hapus semua sesi
        return redirect()->route('login');
    }
}