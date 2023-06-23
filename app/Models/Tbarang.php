<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbarang extends Model
{
    use HasFactory;
    protected $table = 'tbarangs';
    protected $fillable = ['kode_barang', 'nama_barang', 'kategori_barang', 'harga', 'jumlah'];
}
