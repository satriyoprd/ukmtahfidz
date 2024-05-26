<?php

namespace App\Http\Controllers;

use App\Models\SantriVerifiedSetoran;
use Illuminate\Http\Request;


class PanitiaDashboardController extends Controller
{
    public function index() {
        $pendaftaranSetoran = SantriVerifiedSetoran::all();

        return view('dashboard.panitia', compact('pendaftaranSetoran'));
    }

    public function indexSetoran($id) {
        $pendaftaran = SantriVerifiedSetoran::find($id);
        
        return view('dashboard.panitia-pendaftaran-setoran', compact('pendaftaran'));
    }
}
