<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userjur extends Model
{
    protected $fillable = [
        'nome','rsocial', 'cnpj', 'email', 'password','user_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
