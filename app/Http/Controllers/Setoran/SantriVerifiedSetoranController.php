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
        $santriVerified = SantriVerifiedSetoran::where('santri_id', $request->user()->santri->id)->first();

        if (!$santriVerified) {
            SantriVerifiedSetoran::create([
                'santri_id' => $request->user()->santri->id,
            ]);
        }

        return redirect()->route('dashboard.santri')->with('success', 'Berhasil mendaftar ke program setoran tahfidz!');
    }

    public function update(Request $request, SantriVerifiedSetoran $setoran)
    {
        if ($request->is_verified == 1) {
            $setoran->update([
                'is_verified' => $request->is_verified,
            ]);
        } else {
            $setoran->delete();
        }


        return redirect()->route('dashboard.admin.setoran')->with('Success', 'Berhasil merubah data!');
    }
}
