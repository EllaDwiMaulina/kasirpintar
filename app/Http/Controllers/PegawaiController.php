<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // Menampilkan semua pegawai
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    // Menampilkan form tambah pegawai
    public function create()
    {
        $pegawai = pegawai::all();
        return view('pegawai.create');
    }

    // Menyimpan data pegawai baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required|string',
            'sift_awal' => 'required|date_format:H:i',
            'sift_akhir' => 'required|date_format:H:i',
        ]);

        Pegawai::create($request->all());
        return redirect()->route('pegawai.index');
    }

    // Menampilkan form edit pegawai
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    // Mengupdate data pegawai
    public function update(Request $request, $id)
{
    $request->validate([
        'nama_pegawai' => 'required|string|max:255',
        'sift_awal' => 'required',
        'sift_akhir' => 'required',
    ]);

    $pegawai = Pegawai::findOrFail($id);
    $pegawai->nama_pegawai = $request->nama_pegawai;
    $pegawai->sift_awal = $request->sift_awal;
    $pegawai->sift_akhir = $request->sift_akhir;
    $pegawai->save();

    return redirect()->route('pegawai.index')->with('success', 'Data berhasil diperbarui.');
}


    // Menghapus pegawai
    public function destroy($id_pegawai)
    {
        Pegawai::destroy($id_pegawai);
        return redirect()->route('pegawai.index');
    }

    public function show($id)
{
    $pegawai = Pegawai::findOrFail($id);
    return view('pegawai.show', compact('pegawai'));
}
}
