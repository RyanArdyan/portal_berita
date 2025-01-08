<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // jika user sudah login lalu yang login adalah admin maka
        if (Auth::check() && Auth::user()->role === 'admin') {
            // kembali lanjutkan permintaan
            return $next($request);
        }
        // jika user belum login lalu bukan admin maka
        // kembali lalu alihkan ke url awal lalu kirim pesan error atau data sesi yang di flash
        return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini');
    }
}
