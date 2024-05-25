<?php

namespace App\Http\Controllers\Ujian;

use App\Http\Controllers\Controller;
use App\Models\Penguji;
use App\Models\SantriVerifiedUjian;
use App\Models\Surat;
use App\Models\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UjianController extends Controller
{
    public function index()
    {
        $ujian = Ujian::where('santri_id', Auth::user()->santri->id)->get();

        $santriVerified = SantriVerifiedUjian::where('santri_id', Auth::user()->santri->id)->first();

        $ujian->load('penguji.user', 'santri.user', 'nilais', 'surats');

        return view('dashboard.santri-ujian', compact('ujian', 'santriVerified'));
    }

    public function create()
    {
        $surat = Surat::all();
        $penguji = Penguji::all();
        $penguji->load('user');
        $santri = SantriVerifiedUjian::where('is_verified', 1)->get();
        $santri->load('santri');

        return view('dashboard.penguji-ujian-create', compact('penguji', 'santri', 'surat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penguji_id' => 'required',
            'santri_id' => 'required',
            'surat' => 'required',
            'tanggal_ujian' => 'required|date',
            'jumlah_ujian' => 'required',
            'catatan' => 'nullable',
            'nilai_kelancaran' => 'required',
            'nilai_makhraj' => 'required',
            'nilai_lagu' => 'required',
            'nilai_adab' => 'required',
        ]);

        $average = ($request->nilai_kelancaran + $request->nilai_makhraj + $request->nilai_lagu + $request->nilai_adab) / 4;

        $ujian = Ujian::create([
            'penguji_id' => $request->penguji_id,
            'santri_id' => $request->santri_id,
            'tanggal_ujian' => $request->tanggal_ujian,
            'jumlah_ujian' => '1 juz',
            'catatan' => $request->catatan,
            'nilai' => $average,
        ]);

        $ujian->surats()->attach($request->surat);

        $ujian->nilais()->attach([
            1 => ['nilai' => $request->nilai_kelancaran],
            2 => ['nilai' => $request->nilai_makhraj],
            3 => ['nilai' => $request->nilai_lagu],
            4 => ['nilai' => $request->nilai_adab],
        ]);

        return \App\Helper\RouteHelper::getRedirect(Auth::user()->role->id)->with('success', 'Data has been saved successfully');
    }

    public function show(Ujian $ujian)
    {
        $ujian->load('penguji.user', 'santri.user', 'nilais', 'surats');

        return view('ujian.show', compact('ujian'));
    }

    public function edit(Ujian $ujian)
    {
        $ujian->load('penguji.user', 'santri.user', 'nilais', 'surats');
        $surat = Surat::all();
        $penguji = Penguji::all();
        $penguji->load('user');
        $santri = SantriVerifiedUjian::where('is_verified', 1)->get();
        $santri->load('user');

        return view('dashboard.penguji-ujian-update', compact('ujian', 'penguji', 'santri', 'surat'));
    }

    public function update(Request $request, Ujian $ujian)
    {
        $request->validate([
            'penguji_id' => 'required',
            'santri_id' => 'required',
            'surat' => 'required',
            'tanggal_ujian' => 'required',
            'jumlah_ujian' => 'required',
            'catatan' => 'nullable',
            'nilai_kelancaran' => 'required',
            'nilai_makhraj' => 'required',
            'nilai_lagu' => 'required',
            'nilai_adab' => 'required',
        ]);

        $average = ($request->nilai_kelancaran + $request->nilai_makhraj + $request->nilai_lagu + $request->nilai_adab) / 4;

        $ujian->update([
            'penguji_id' => $request->penguji_id,
            'santri_id' => $request->santri_id,
            'surat' => $request->surat,
            'tanggal_ujian' => $request->tanggal_ujian,
            'jumlah_ujian' => $request->jumlah_ujian,
            'catatan' => $request->catatan,
            'nilai' => $average,
        ]);

        $ujian->surats()->sync($request->surat);

        $ujian->nilais()->sync([
            1 => ['nilai' => $request->nilai_kelancaran],
            2 => ['nilai' => $request->nilai_makhraj],
            3 => ['nilai' => $request->nilai_lagu],
            4 => ['nilai' => $request->nilai_adab],
        ]);

        return \App\Helper\RouteHelper::getRedirect(Auth::user()->role->id);
    }

    public function destroy(Ujian $ujian)
    {
        $ujian->delete();

        return \App\Helper\RouteHelper::getRedirect(Auth::user()->role->id);
    }
}