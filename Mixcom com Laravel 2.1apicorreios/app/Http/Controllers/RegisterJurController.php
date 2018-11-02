<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userjur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterJurController extends Controller
{
    public function index(){
        $userjur = Userjur::all();
        return view('telaCadastroJur');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'rsocial' => 'required|string|max:255',
            'cnpj' => 'required|int|min:14',
            'email' => 'required|string|email|max:255|unique:usersjur',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Userjur
     */
    protected function store(Request $request)
    {
        $userjur = new Userjur();
        $userjur->nome     = $request->get('nome');
        $userjur->rsocial  = $request->get('rsocial');
        $userjur->cnpj     = $request->get('cnpj');
        $userjur->email    = $request->get('email');
        $userjur->password = $request->get('password');
        $endereco->save();

        return redirect('/Inicio');
    }
}
