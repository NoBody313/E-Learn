<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Auth::user();
        return view('roles.siswa.dashboard', compact('data'));
    }

    public function daftarPelajaran()
    {
        return view('roles.siswa.pelajaran.daftar-pelajaran');
    }

    public function daftarNilai()
    {
        return view('roles.siswa.daftar-nilai');
    }

    public function profil()
    {
        return view('roles.siswa.profil');
    }
}
