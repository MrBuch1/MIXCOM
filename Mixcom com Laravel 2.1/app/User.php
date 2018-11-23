<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nome', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function endereco(){
        return $this->hasOne('App\Endereco');
    }

    public function Userjur(){
        return $this->hasOne('App\User');
    }

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }
}
