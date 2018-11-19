<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userfis extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cpf',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function User(){
        return $this->hasOne('App\User');
    }
}
