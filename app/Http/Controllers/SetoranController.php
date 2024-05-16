<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setoran;

class SetoranController extends Controller
{
    public function getSetoran()
    {
        $setorans = Setoran::all();
        return view('dashboard.penguji_dashboard', compact('setorans'));
    }

    public function getSetoranSantri()
    {
        $setoranSantri = Setoran::all();
        return view('dashboard.santri_dashboard', compact('setoranSantri'));
    }

    public function edit($id_setoran)
    {
        $setoran = Setoran::findOrFail($id_setoran);
        return view('dashboard.edit', compact('setoran'));
    }

    public function update(Request $request, $id_setoran)
    {
        $setoran = Setoran::findOrFail($id_setoran);
        $setoran->update($request->all());
        return redirect('/penguji')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id_setoran)
    {
        $setoran = Setoran::findOrFail($id_setoran);
        $setoran->delete();
        return redirect('/penguji')->with('success', 'Data berhasil dihapus');
    }
}
