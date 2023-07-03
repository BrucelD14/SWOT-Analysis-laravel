<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weakness extends Model
{
    use HasFactory;
    protected $fillable = [
        'faktor_strategis',
        'bobot',
        'rating',
        'score',
        'tingkat_signifikan',
    ];
}
