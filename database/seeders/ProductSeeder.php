<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Data produk yang akan dimasukkan ke database
         $products = [
            ['kode_produk' => 'A001', 'nama_produk' => 'Gelang', 'harga' => 50000, 'image' => 'gelang.jpg'],
            ['kode_produk' => 'A002', 'nama_produk' => 'Tote Bag', 'harga' => 75000, 'image' => 'totebag.jpg'],
            ['kode_produk' => 'A003', 'nama_produk' => 'Jam Tangan', 'harga' => 150000, 'image' => 'jamtangan.jpg'],
            ['kode_produk' => 'A004', 'nama_produk' => 'Sepatu', 'harga' => 200000, 'image' => 'sepatu.jpg'],
            ['kode_produk' => 'A005', 'nama_produk' => 'Kemeja', 'harga' => 120000, 'image' => 'kemeja.jpg'],
            ['kode_produk' => 'A006', 'nama_produk' => 'Sling Bag', 'harga' => 85000, 'image' => 'slingbag.jpg'],
            ['kode_produk' => 'A007', 'nama_produk' => 'Celana', 'harga' => 100000, 'image' => 'celana.jpg'],
            ['kode_produk' => 'A008', 'nama_produk' => 'Kalung', 'harga' => 150000, 'image' => 'kalung.jpg'],
            ['kode_produk' => 'A009', 'nama_produk' => 'Cincin', 'harga' => 300000, 'image' => 'cincin.jpg'],
            ['kode_produk' => 'A010', 'nama_produk' => 'Sandal', 'harga' => 50000, 'image' => 'sandal.jpg'],
        ];

        // Menambahkan produk ke dalam database
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
