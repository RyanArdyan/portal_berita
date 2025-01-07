<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('registrasi');
    }

    // $request berisi menyimpan data name, email dan password
    public function store(Request $request)
    {
        // dd($request->all());

        // tangkap datanya
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        $divalidasi = $request->validate([
            'name' => ['required', 'max:255', 'unique:users'],
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'min:6', 'max:255', 'confirmed'],
        ]);

        // simpan datanya
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);
        // kembali lalu alihkan ke rute login, lalu kirimkan data success
        return redirect()->route('login')->with('status', 'Registrasi berhasil, silahkan login');
    }
}
