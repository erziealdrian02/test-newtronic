<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [  
        'sport',  
        'team_a',  
        'team_b',  
        'score_a',  
        'score_b',  
    ];  
}
