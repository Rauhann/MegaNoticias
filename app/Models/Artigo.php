<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artigo extends Model
{
    const ARTICLE_LIMIT = 8;

    use HasFactory, SoftDeletes;

    protected $table = 'artigos';

    protected $fillable = [
        'titulo',
        'descricao',
        'data'
    ];

    public function getDataAttribute($value)
    {
        return (new Carbon($value))->format('d l Y');
    }
}
