<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rua', 'numero', 'bairro', 'cep', 'cidade', 'estado'
    ];
}
