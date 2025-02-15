<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterDetailTransaksi extends Model
{
    protected $table = 'master_detail_transaksis';

    protected $fillable = [
        'id_transaksi',
        'id_produk',
        'quantity',
    ];
    
    public function transaksi()
    {
        return $this->belongsTo(MasterTransaksi::class, 'id_transaksi');
    }

    public function produk()
    {
        return $this->belongsTo(MasterProduk::class, 'id_produk');
    }
}
