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
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Userjur
     */
    protected function store(Request $request)
    {
        $userjur = new Userjur();
        $userjur->nome     = $request->input('nome');
        $userjur->rsocial  = $request->input('rsocial');
        $userjur->cnpj     = $request->input('cnpj');
        $userjur->telefone = $request->input('telefone');
        $userjur->email    = $request->input('email');
        $userjur->password = $request->input('password');
        $userjur->save();

        return redirect('/Inicio');
    }

    public function edit($id)
    {
        $userjur = Userjur::find($id);
        return view("editarPerfilJur", compact('userjur'));
    }

    public function update($id)
    {
        $userjur = Userjur::find($id);
        $userjur->nome     = $request->get('nome');
        $userjur->rsocial  = $request->get('rsocial');
        $userjur->cnpj     = $request->get('cnpj');
        $userjur->telefone = $request->get('telefone');
        $userjur->email    = $request->get('email');
        $userjur->password = $request->get('password');
        $userjur->save();
    }

}
