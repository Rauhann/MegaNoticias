<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registro extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'registros';

    protected $fillable = [
        'email'
    ];
}
