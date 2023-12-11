<?php

namespace App\Http\Controllers;

use App\Models\absensi;
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
        return view('createAbsensi');
    }
    public function store(Request $request)
    {
        absensi::create([
            'name' => $request -> name,
            'NIM' => $request -> NIM,
            'BNCCID' => $request -> BNCCID,
            'absensi_Date' => $request -> absensi_Date
        ]);
        return redirect(Route('show'));
    }
}
