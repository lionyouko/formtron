<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'uc',
        'nalunos',
        'cpu',
        'ram',
        'storage',
        'gpu',
        'net',
        'frameworks',
        'observations',
    ];

}
