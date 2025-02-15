<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterTransaksi extends Model
{
    protected $table = 'master_transaksis';

    protected $fillable = [
        'kode_transaksi',
        'tanggal',
    ];

    public function detailTransaksi()
    {
        return $this->hasMany(MasterDetailTransaksi::class, 'id_transaksi');
    }
}
