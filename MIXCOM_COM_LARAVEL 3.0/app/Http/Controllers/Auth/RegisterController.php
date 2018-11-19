<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserFis;
use App\UserJur;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    
    public function store(Request $request){

        $user = new User();

        $user->nome = $request->input('nome');
        $user->email = $request->input('email');
        $user->telefone = $request->input('telefone');
        $user->password = $request->input('password');

        if (valor == 1){
            $userfis = new UserFis();

            $userfis->cpf = $request->input('cpf');
        }
        else{
            $userjur = new UserJur();

            $userjur->cnpj = $request->input('cnpj');
            $userjur->rsocial = $request->input('rsocial');
        }

        $user->save();
    }

}
