<?php

namespace App\Http\Controllers\Setoran;

use App\Helper\RouteHelper;
use App\Http\Controllers\Controller;
use App\Models\SantriVerifiedSetoran;
use Illuminate\Http\Request;

class SantriVerifiedSetoranController extends Controller
{
    public function index()
    {
        $setoranVerified = SantriVerifiedSetoran::with('santri.user')->get();

        return view('setoran.santri-verified', compact('setoranVerified'));
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

        $setoran->update([
            'is_verified' => $request->is_verified,
        ]);


        return RouteHelper::getRedirect($request->user()->role_id)->with('Success', 'Berhasil merubah data!');
    }
}
