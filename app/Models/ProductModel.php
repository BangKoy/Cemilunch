<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductModel extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'products';

    // Menentukan kolom mana saja yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'name',
        'stock',
        'price',
        'description', // Added description field
    ];
}
