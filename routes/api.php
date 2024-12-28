<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Suplier;
use App\Models\Pegawai; // Pastikan model Pegawai sudah ada

// RUte untuk Pegawai

// Rute untuk mendapatkan semua pegawai
Route::get('/pegawai', function () {
    return Pegawai::all(); // Mengembalikan semua pegawai dalam format JSON
});

// Rute untuk mendapatkan pegawai berdasarkan ID
Route::get('/pegawai/{id}', function ($id) {
    return Pegawai::findOrFail($id); // Mengembalikan pegawai berdasarkan ID
});

// Rute untuk menambahkan pegawai baru
Route::post('/pegawai', function (Request $request) {
    $request->validate([
        'nama_pegawai' => 'required|string|max:255',
        'sift_awal' => 'required|date_format:H:i',
        'sift_akhir' => 'required|date_format:H:i',
    ]);

    $pegawai = Pegawai::create($request->all()); // Menyimpan pegawai baru
    return response()->json($pegawai, 201); // Mengembalikan pegawai yang baru dibuat
});

// Rute untuk memperbarui pegawai
Route::put('/pegawai/{id}', function (Request $request, $id) {
    $pegawai = Pegawai::findOrFail($id);
    $pegawai->update($request->all()); // Memperbarui data pegawai
    return response()->json($pegawai, 200); // Mengembalikan pegawai yang diperbarui
});

// Rute untuk menghapus pegawai
Route::delete('/pegawai/{id}', function ($id) {
    Pegawai::destroy($id); // Menghapus pegawai berdasarkan ID
    return response()->json(null, 204); // Mengembalikan status 204 No Content
});

// Rute untuk Suplier
// Rute untuk mendapatkan semua supplier
Route::get('/supliers', function () {
    return Suplier::all(); // Mengembalikan semua supplier dalam format JSON
});

// Rute untuk mendapatkan supplier berdasarkan ID
Route::get('/supliers/{id}', function ($id) {
    return Suplier::findOrFail($id); // Mengembalikan supplier berdasarkan ID
});

// Rute untuk menambahkan supplier baru
Route::post('/supliers', function (Request $request) {
    $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string|max:500',
        'email' => 'required|email|unique:supliers,email',
        'no_hp' => 'required|string|max:15',
    ]);

    $suplier = Suplier::create($request->all()); // Menyimpan supplier baru
    return response()->json($suplier, 201); // Mengembalikan supplier yang baru dibuat
});

// Rute untuk memperbarui supplier
Route::put('/supliers/{id}', function (Request $request, $id) {
    $suplier = Suplier::findOrFail($id);
    $request->validate([
        'nama' => 'string|max:255',
        'alamat' => 'string|max:500',
        'email' => 'email|unique:supliers,email,' . $id,
        'no_hp' => 'string|max:15',
    ]);

    $suplier->update($request->all()); // Memperbarui data supplier
    return response()->json($suplier, 200); // Mengembalikan supplier yang diperbarui
});

// Rute untuk menghapus supplier
Route::delete('/supliers/{id}', function ($id) {
    Suplier::destroy($id); // Menghapus supplier berdasarkan ID
    return response()->json(null, 204); // Mengembalikan status 204 No Content
});