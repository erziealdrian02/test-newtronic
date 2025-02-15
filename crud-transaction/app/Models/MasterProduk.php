<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterProduk extends Model
{
    protected $table = 'master_produks';

    protected $fillable = [
        'produk',
        'stok',
        'harga',
    ];
}
