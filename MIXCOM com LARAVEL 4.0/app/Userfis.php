<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Notifiable;

class Userfis extends Model
{


    protected $fillable = [
        'nome', 'cpf', 'email', 'password','user_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
