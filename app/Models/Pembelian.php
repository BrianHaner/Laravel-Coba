<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $fillable = [
        'nama_customer',
        'nama_barang',
        'jumlah_barang',
        'harga_barang',
        'total'
    ];
}
