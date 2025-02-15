<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterCrawl extends Model
{
    protected $table = 'master_crawls';

    protected $fillable = [
        'currency',
        'denomination',
        'buy',
        'sell',
    ];
}
