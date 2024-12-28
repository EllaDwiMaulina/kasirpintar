<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table = 'supliers';

    // Tentukan kolom primary key yang benar
    protected $primaryKey = 'id_suplier'; // Sesuaikan dengan nama kolom primary key

    protected $fillable = ['nama', 'alamat', 'email', 'no_hp'];

    public function produks()
    {
        return $this->hasMany(Produk::class, 'id_suplier');
    }
}

