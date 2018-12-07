<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'tipo',
        'codtipo',
        'marca',
        'valor',
        'categoria',
        'descricao',
        'imagem',
        'caracteristica',
        'ativo'
    ];
}
