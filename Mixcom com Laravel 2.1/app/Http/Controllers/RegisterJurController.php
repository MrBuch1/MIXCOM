<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userjur;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterJurController extends Controller
{
    public function index(){
        $userjur = Userjur::all();
        return view('auth\telaCadastroJur');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Userjur
     */
    protected function store(Request $request)
    {
        $user    = new User();
        $userjur = new Userjur();
        $user->nome       = $request->input('name');
        $user->telefone   = $request->input('teleone');
        $user->email      = $request->input('email');
        $user->password   = $request->input('password');
        $userjur->rsocial = $request->input('rsocial');
        $userjur->cnpj    = $request->input('cnpj');
        $user->save();
        $user->Userjur()->save($userjur);

        return redirect('/Inicio');
    }
}
