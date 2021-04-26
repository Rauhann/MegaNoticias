<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Previsao extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'previsoes';

    protected $fillable = [
        'nome',
        'data',
        'codigo',
        'temperatura_min',
        'temperatura_max',
        'expira_em'
    ];
}
