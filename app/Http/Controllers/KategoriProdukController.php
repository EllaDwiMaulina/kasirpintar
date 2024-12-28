<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    public function index()
    {
        $kategori_produk = KategoriProduk::all();
        return view('kategori_produk.index', compact('kategori_produks'));
    }

    public function create()
{
    $kategori_produk = KategoriProduk::all(); // Ambil data kategori produk
    return view('product.create', compact('kategori_produk'));
}


    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        KategoriProduk::create($request->all());
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function show(KategoriProduk $kategori)
    {
        return view('kategori.show', compact('kategori'));
    }

    public function edit(KategoriProduk $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, KategoriProduk $kategori)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        $kategori->update($request->all());
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(KategoriProduk $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
