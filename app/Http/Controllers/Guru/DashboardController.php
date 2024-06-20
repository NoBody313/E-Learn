<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Auth::user();
        return view('roles.guru.dashboard', compact('data'));
    }

    public function kelolaTugas()
    {
        return view('roles.guru.kelola-tugas');
    }

    public function kelolaPelajaran()
    {
        return view('roles.guru.kelola-pelajaran');
    }

    public function kelolaNilai()
    {
        return view('roles.guru.kelola-nilai-pelajaran');
    }

}
