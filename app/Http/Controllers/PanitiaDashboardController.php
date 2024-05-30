<?php

namespace App\Http\Controllers;

use App\Models\SantriVerifiedSetoran;
use App\Models\SantriVerifiedUjian;
use Illuminate\Http\Request;


class PanitiaDashboardController extends Controller
{
    public function index() {
        $pendaftaranSetoran = SantriVerifiedSetoran::all();
        $pendaftaranUjian = SantriVerifiedUjian::all();

        return view('dashboard.panitia', compact('pendaftaranSetoran', 'pendaftaranUjian'));
    }

    public function indexSetoran($id) {
        $pendaftaran = SantriVerifiedSetoran::find($id);
        
        return view('dashboard.panitia-pendaftaran-setoran', compact('pendaftaran'));
    }

    public function indexUjian($id) {
        $pendaftaran = SantriVerifiedUjian::find($id);
        
        return view('dashboard.panitia-pendaftaran-ujian', compact('pendaftaran'));
    }
}
