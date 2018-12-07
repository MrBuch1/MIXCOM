<?php

namespace App\Http\Controllers;

use App\Userfis;
use App\User;
use App\Endereco;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterFisController extends Controller
{

    public function index(){
        $userfis = Userfis::all();
        return view ('auth\cadastroFis');
    }

    
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Userfis
     */
    protected function store(Request $request)
    {

        $validatedData = $request->validate([
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);

        $user = new User();
        $userfis = new Userfis();
        $user->nome     = $request->input('name');
        $user->telefone = $request->input('telefone');
        $user->email    = $request->input('email');
        $hashedPassword = bcrypt('password');
        $user->password = $hashedPassword;
        $userfis->cpf   = $request->input('cpf');
        
        $user->save();
        $userfis->user_id = $user->id;
        $userfis->save();

       /* $endereco = new Endereco();
        $endereco->rua    = $request->input('rua');
        $endereco->numero = $request->input('num');
        $endereco->cep    = $request->input('cep');
        $endereco->bairro = $request->input('bairro');
        $endereco->cidade = $request->input('cidade');
        $endereco->estado = $request->input('estado');
        $endereco->save(); */
        
        

        return redirect('/Inicio');
    }
}
