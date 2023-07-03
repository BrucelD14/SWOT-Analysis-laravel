<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strength extends Model
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
