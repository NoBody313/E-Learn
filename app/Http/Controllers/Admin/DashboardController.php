<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $data = Auth::user();
        return view('roles.admin.dashboard', compact('data'));
    }

    public function kelolaPengguna()
    {
        return view('roles.admin.kelola-pengguna');
    }
}
