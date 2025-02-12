<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            SuplierSeeder::class,
            KategoriProdukSeeder::class,
            ProdukSeeder::class,
            PegawaiSeeder::class,
        ]);
    }
}
