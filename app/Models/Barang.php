<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi secara massal
    protected $fillable = ['nama', 'jenis', 'merk', 'ukuran', 'stock', 'satuan', 'lokasi'];

    protected $hidden = [];
}