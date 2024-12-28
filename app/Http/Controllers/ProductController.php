<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil data produk dari database
        $products = Product::all();

        // Kirim data ke view
        return view('products.index', compact('products'));
    }

    public function create()
    {
        // Kirim data ke view
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        // Simpan data produk ke database
        Product::create($request->only(['product_name', 'category']));

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
}