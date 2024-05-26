<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\SantriVerifiedSetoran;
use Illuminate\Http\Request;

class PengujiDashboardController extends Controller
{
    public function indexDetailSantri(int $id) {
        $pendaftaran = SantriVerifiedSetoran::find($id);
        return view('dashboard.penguji-detail-santri', compact('pendaftaran'));
    }
}
