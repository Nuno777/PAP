<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetosFotos extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'descricao', 'localizacao', 'data', 'images'
    ];
}
