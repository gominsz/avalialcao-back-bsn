<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelsPokemons extends Model
{
    protected $fillable = [
        'name',
        'url',
        'image',
    ];
}
