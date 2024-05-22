<?php

namespace App\Http\Controllers\Setoran;

use App\Http\Controllers\Controller;
use App\Models\SantriVerifiedSetoran;
use Illuminate\Http\Request;

class SantriVerifiedSetoranController extends Controller
{
    public function index()
    {
        $setoranVerified = SantriVerifiedSetoran::with('santri.user')->get();

        return view('santri-verified.index', compact('setoranVerified'));
    }


    public function store(Request $request)
    {
        SantriVerifiedSetoran::create([
            'santri_id' => $request->user()->santri->id,
        ]);

        return redirect()->route('dashboard.santri');
    }

    public function update(Request $request, SantriVerifiedSetoran $setoran)
    {
        $setoran->update([
            'is_verified' => $request->is_verified,
        ]);

        return redirect()->route('santri-verified-setoran.index');
    }
}
