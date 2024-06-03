<?php

namespace App\Http\Controllers;

use App\Models\SantriVerifiedSetoran;
use App\Models\SantriVerifiedUjian;
use Illuminate\Support\Facades\DB;



class PanitiaDashboardController extends Controller
{
    public function index() {
        $ujianSubQuery = SantriVerifiedUjian::select(DB::raw('MAX(id) as id'))
        ->groupBy('santri_id');

    $setoranSubQuery = SantriVerifiedSetoran::select(DB::raw('MAX(id) as id'))
        ->groupBy('santri_id');

        $pendaftaranSetoran = SantriVerifiedSetoran::whereIn('id', $setoranSubQuery)->get();
        $pendaftaranUjian =  SantriVerifiedUjian::whereIn('id', $ujianSubQuery)->get();

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
