<?php

namespace App\Http\Controllers\Setoran;

use App\Http\Controllers\Controller;
use App\Models\Penguji;
use App\Models\Santri;
use App\Models\Setoran;
use Illuminate\Http\Request;

class SetoranController extends Controller
{
    public function index()
    {
        $setoran = Setoran::all();
        $setoran->load('penguji.user', 'santri.user', 'nilais');

        return view('setoran.index', compact('setoran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penguji = Penguji::all();
        $penguji->load('user');
        $santri = Santri::all();
        $santri->load('user');

        return view('setoran.create', compact('penguji', 'santri'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'penguji_id' => 'required',
            'santri_id' => 'required',
            'tanggal_setoran' => 'required',
            'surat' => 'required',
            'jumlah_setoran' => 'required',
            'catatan' => 'nullable',
            'status' => 'required',
            'nilai_kelancaran' => 'required',
            'nilai_makhraj' => 'required',
            'nilai_lagu' => 'required',
            'nilai_adab' => 'required',
        ]);

        $average = ($request->nilai_kelancaran + $request->nilai_makhraj + $request->nilai_lagu + $request->nilai_adab) / 4;

        $setoran = Setoran::create([
            'penguji_id' => $request->penguji_id,
            'santri_id' => $request->santri_id,
            'tanggal_setoran' => $request->tanggal_setoran,
            'surat' => $request->surat,
            'jumlah_setoran' => $request->jumlah_setoran,
            'catatan' => $request->catatan,
            'status' => $request->status,
            'nilai' => $average,
        ]);

        $setoran->nilais()->attach([
            1 => ['nilai' => $request->nilai_kelancaran],
            2 => ['nilai' => $request->nilai_makhraj],
            3 => ['nilai' => $request->nilai_lagu],
            4 => ['nilai' => $request->nilai_adab],
        ]);

        return redirect()->route('setoran.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Setoran $setoran)
    {
        return view('setoran.show', compact('setoran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setoran $setoran)
    {
        $penguji = Penguji::all();
        $penguji->load('user');
        $santri = Santri::all();
        $santri->load('user');

        return view('setoran.edit', compact('setoran', 'penguji', 'santri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setoran $setoran)
    {
        $request->validate([
            'penguji_id' => 'required',
            'santri_id' => 'required',
            'tanggal_setoran' => 'required',
            'surat' => 'required',
            'jumlah_setoran' => 'required',
            'catatan' => 'nullable',
            'status' => 'required',
            'nilai_kelancaran' => 'required',
            'nilai_makhraj' => 'required',
            'nilai_lagu' => 'required',
            'nilai_adab' => 'required',
        ]);

        $average = ($request->nilai_kelancaran + $request->nilai_makhraj + $request->nilai_lagu + $request->nilai_adab) / 4;

        $setoran->update([
            'penguji_id' => $request->penguji_id,
            'santri_id' => $request->santri_id,
            'tanggal_setoran' => $request->tanggal_setoran,
            'surat' => $request->surat,
            'jumlah_setoran' => $request->jumlah_setoran,
            'catatan' => $request->catatan,
            'status' => $request->status,
            'nilai' => $average,
        ]);

        $setoran->nilais()->sync([
            1 => ['nilai' => $request->nilai_kelancaran],
            2 => ['nilai' => $request->nilai_makhraj],
            3 => ['nilai' => $request->nilai_lagu],
            4 => ['nilai' => $request->nilai_adab],
        ]);

        return redirect()->route('setoran.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setoran $setoran)
    {
        $setoran->delete();

        return redirect()->route('setoran.create');
    }
}
