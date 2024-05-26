<?php

namespace App\Http\Controllers\Ujian;

use App\Http\Controllers\Controller;
use App\Models\SantriVerifiedUjian;
use Illuminate\Http\Request;

class SantriVerifiedUjianController extends Controller
{
    public function index()
    {
        $santriVerifiedUjian = SantriVerifiedUjian::with('santri.user')->get();

        return view('ujian.santri-verified', compact('santriVerifiedUjian'));
    }


    public function store(Request $request)
    {
        $santriVerified = SantriVerifiedUjian::where('santri_id', $request->user()->santri->id)->first();

        if (!$santriVerified) {
            SantriVerifiedUjian::create([
                'santri_id' => $request->user()->santri->id,
            ]);
        }

        return redirect()->route('dashboard.santri')->with('success', 'Berhasil mendaftar ke program setoran tahfidz!');
    }

    public function update(Request $request, SantriVerifiedUjian $santriVerifiedUjian)
    {
        if($request->user()->role_id == 2)
        {
            $santriVerifiedUjian->update([
                'panitia_verified' => $request->panitia_verified,
            ]);
        }elseif($request->user()->role_id == 4)
        {
            $santriVerifiedUjian->update([
                'penguji_verified' => $request->penguji_verified,
            ]);
        }

        return redirect()->route('dashboard.admin.setoran')->with('Success', 'Berhasil merubah data!');
    }
}
