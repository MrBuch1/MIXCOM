<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Userfis;
use App\Userjur;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }


    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'telefone' => $data['telefone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if(isset($data['cpf'])){
            Userfis::create(['user_id' => $user->id, 'cpf' => $data['cpf']]);
        } else {
            Userjur::create(['user_id' => $user->id, 'cnpj' => $data['cnpj'], 'rsocial' => $data['rsocial']]);
        }

        return $user;
    }

}
