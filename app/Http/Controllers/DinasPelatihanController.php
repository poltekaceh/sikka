<?php

namespace App\Http\Controllers;

use App\DaftarPelatihan;
use App\Pelatihan;
use Illuminate\Http\Request;

class DinasPelatihanController extends Controller
{
    public function create()
    {
        return view("Dinas.pelatihan.createPelatihan");
    }

    public function index()
    {
        $pelatihans = Pelatihan::all();
        return view('Dinas.pelatihan.dataPelatihan', compact('pelatihans'));
    }

    public function store(Request $request)
    {
        $pelatihan = Pelatihan::create([
            'nama_pelatihan' => $request->nama_pelatihan,
            'jenis_pelatihan' => $request->jenis_pelatihan,
            'nama_penyelenggara' => $request->nama_penyelenggara,
            'tanggal' => $request->tanggal,
            'jumlah_formasi' => $request->jumlah_formasi,
            'biaya' => $request->biaya,
            'lokasi' => $request->lokasi,
            'durasi' => $request->durasi,
        ]);
        return redirect("dinas/pelatihan")->with('SUCCESS', $pelatihan->nama_pelatihan . " Berhasil disimpan");
    }

    public function edit($id)
    {
        $pelatihan = Pelatihan::find($id);
        return view('Dinas.pelatihan.editPelatihan', compact('pelatihan', 'id'));
    }

    public function update(Request $request, $id)
    {
        $pelatihan = Pelatihan::find($id);
        $pelatihan->nama_pelatihan = $request->nama_pelatihan;
        $pelatihan->jenis_pelatihan = $request->jenis_pelatihan;
        $pelatihan->nama_penyelenggara = $request->nama_penyelenggara;
        $pelatihan->tanggal = $request->tanggal;
        $pelatihan->jumlah_formasi = $request->jumlah_formasi;
        $pelatihan->biaya = $request->biaya;
        $pelatihan->lokasi = $request->lokasi;
        $pelatihan->durasi = $request->durasi;
        $pelatihan->save();

        return redirect("dinas/pelatihan")->with('SUCCESS', $pelatihan->nama_pelatihan . " Berhasil disimpan");
    }

    public function destroy($id)
    {
        $pelatihan = Pelatihan::find($id);
        $pelatihan->delete();
        return redirect("dinas/pelatihan")->with('SUCCESS', $pelatihan->nama_pelatihan . " Berhasil dihapus");
    }

    public function showPendaftar()
    {
        $pendaftars = DaftarPelatihan::all();
        return view('Dinas.pelatihan.pendaftarPelatihan', compact('pendaftars'));
    }
}
