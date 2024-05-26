<?php

namespace App\Http\Controllers;

use App\Models\SantriVerifiedSetoran;
use App\Models\SantriVerifiedUjian;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.admin');
    }
    public function index_setoran()
    {
        $pendaftaran = SantriVerifiedSetoran::all();
        return view('dashboard.admin-setoran', compact('pendaftaran'));
    }

    public function indexUjian()
    {
        $pendaftaran = SantriVerifiedUjian::all();
        return view('dashboard.admin-ujian', compact('pendaftaran'));
    }
}
