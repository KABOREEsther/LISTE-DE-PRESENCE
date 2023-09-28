<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListesModel extends Model
{
    use HasFactory;
    protected $casts = [

        'nom',
        'prenom',
        'email',
        'number',

    ];
}
