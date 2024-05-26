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

    public function editSetoranPenguji($id)
    {
        $pendaftaran = SantriVerifiedSetoran::find($id);

        return view('dashboard.admin-setoran-penguji', compact('pendaftaran'));
    }

    public function editSetoranPanitia($id)
    {
        $pendaftaran = SantriVerifiedSetoran::find($id);

        return view('dashboard.admin-setoran-panitia', compact('pendaftaran'));
    }

    public function editUjianPanitia($id) {
        $pendaftaran = SantriVerifiedUjian::find($id);

        return view('dashboard.admin-ujian-panitia', compact('pendaftaran'));
    }

    public function editUjianPenguji($id) {
        $pendaftaran = SantriVerifiedUjian::find($id);

        return view('dashboard.admin-ujian-penguji', compact('pendaftaran'));
    }

    public function indexUjian()
    {
        $pendaftaran = SantriVerifiedUjian::all();
        return view('dashboard.admin-ujian', compact('pendaftaran'));
    }
}
