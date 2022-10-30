<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\matkul;
use App\Models\mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dosens = dosen::count();
        $mahasiswas = mahasiswa::count();
        $matkuls = matkul::count();
        return view('index', compact('dosens', 'mahasiswas', 'matkuls'));
    }
}