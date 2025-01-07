<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // menampilkan halaman
    public function index()
    {
        // kembalikkan ke tampilan home.index
        return view('admin.dashboard.index');
    }
}
