<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // untuk menampilkan halaman login
    public function index()
    {
        // kembalikkkan ke halaman login
        return view('login');
    }

    // $request berisi menyimpan data name, email dan password dari form
    public function store(Request $request)
    {
        // tangkap datanya
        $email = $request->email;
        $password = $request->password;
        $ingat_saya = $request->ingat_saya;

        // ambil kredensial
        // lakukan validasi
        $credentials = $request->validate([
            // validasi
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:6', 'max:255'],
        ]);

        // jika kredensial cocok dan kita gunakan fitur ingat saya
        if (Auth::attempt(['email' => $email, 'password' => $password], $ingat_saya)) {
            // hasilkan ulang sesi
            $request->session()->regenerate();

            // kembali lalu alihkan ke url awal, lalu kirimkan data success
            return redirect('/')->with('status', 'Login berhasil');
        }

        // jika kredensial name dan password tidak cocok maka
        // kembalikkan ke url sebelumnya yaitu login dan tampilkan pesan error di bawah input email
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        // autentikasi, keluar
        Auth::logout();
        // $permintaan->sesi->membatalkan
        $request->session()->invalidate();
        // $permintaan->sesi->hasilkanUlangToken
        $request->session()->regenerateToken();
        // kembali alihkan
        return redirect('/login')->with('status', 'Logout berhasil');
    }
}
