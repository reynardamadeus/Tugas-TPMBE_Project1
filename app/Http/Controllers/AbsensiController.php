<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use App\Models\Kelas;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{

    public function show()
    {
        $absensis = absensi::all();
        return view('welcome', compact('absensis'));
    }
    public function create()
    {
        $kelas = Kelas::all();
        return view('createAbsensi', compact('kelas'));
    }
    public function store(Request $request)
    {

        $fileName = $request->name . '-' . $request->NIM . '-' . $request->file('image') -> getClientOriginalName();
        $request->file('image')->storeAs('/public/image', $fileName);
        absensi::create([
            'name' => $request -> name,
            'NIM' => $request -> NIM,
            'BNCCID' => $request -> BNCCID,
            'absensi_Date' => $request -> absensi_Date,
            'image' => $fileName,
            'Kelas_id' => $request->LNT_class
        ]);
        return redirect(route('show'));
    }
    public function edit($id)
    {
        $absensi = absensi::findOrFail($id);
        return view('editAbsensi', compact('absensi'));
    }

    public function update($id, Request $request)
    {
        $absensi = absensi::findOrFail($id);
        $absensi->update([
            'name' => $request -> name,
            'NIM' => $request -> NIM,
            'BNCCID' => $request -> BNCCID,
            'absensi_Date' => $request -> absensi_Date
        ]);
        return redirect(route('show'));
    }
    public function delete($id)
    {
        absensi::destroy($id);
        return redirect(route('show'));
    }
}
