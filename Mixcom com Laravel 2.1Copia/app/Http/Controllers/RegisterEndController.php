<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterEndController extends Controller
{

    //protected $redirectTo = '/index';
    
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'rua' => 'required|string|max:255',
            'num' => 'required|int|',
            'cep' => 'required|int|email|max:8|unique:users',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255|confirmed',
            'estado' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Endereco
     */
    protected function store(Request $request)
    {
        $endereco = new Endereco();
        $endereco->rua    = $request->get('rua');
        $endereco->numero = $request->get('num');
        $endereco->cep    = $request->get('cep');
        $endereco->bairro = $request->get('bairro');
        $endereco->cidade = $request->get('cidade');
        $endereco->estado = $request->get('estado');
        $endereco->save();

        return redirect('/Inicio');
    }
}
