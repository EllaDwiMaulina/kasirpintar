<?php

namespace App\Models; // Pastikan namespace-nya App\Models
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'category']; // Sesuaikan dengan field Anda
}
