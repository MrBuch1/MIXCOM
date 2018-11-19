<?php

namespace App\Http\Controllers;

use App\Userfis;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\uHash;
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
        $userfis = new Userfis();
<<<<<<< HEAD
        $userfis->cpf = $request->input('cpf');
        $userfis->save();
=======
        //$userjur->nome     = $request->get('nome');
        //$userjur->cpf      = $request->get('cpf');
        //$userjur->email    = $request->get('email');
        //$userjur->password = $request->get('password');
        $endereco->save();
>>>>>>> master

        return redirect('/Inicio');
    }
}
