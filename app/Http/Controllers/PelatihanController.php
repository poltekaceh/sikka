<?php

namespace App\Http\Controllers;

use App\DaftarPelatihan;
use App\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function index()
    {
        $pelatihans = Pelatihan::all();
        $daftarpelatihans = DaftarPelatihan::all();
        return view('pelatihan.listPelatihan', compact('pelatihans', 'daftarpelatihans'));
    }

    public function store(Request $request)
    {
        $daftarPelatihan = DaftarPelatihan::create([
            'username' => 'Anonim',
            'id_pelatihan' => $request->id_pelatihan,
            'nomor' => $request->nomor,
            'nama_pelatihan' => $request->nama_pelatihan,
            'nama_penyelenggara' => $request->nama_penyelenggara,
            'status' => $request->status,
            'id_pendidikan' => '0',
        ]);

        return redirect()->route('pelatihan.index');
    }
}
