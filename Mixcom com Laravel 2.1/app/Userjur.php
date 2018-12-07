<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userjur extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

   

    protected $fillable = [
        'rsocial', 'cnpj',
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
