<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userjur;
use App\User;
use App\Endereco;
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

        $validatedData = $request->validate([
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);

        $user    = new User();
        $userjur = new Userjur();
        $user->nome       = $request->input('name');
        $user->telefone   = $request->input('telefone');
        $user->email      = $request->input('email');
        $user->password   = $request->input('password');
        $userjur->rsocial = $request->input('rsocial');
        $userjur->cnpj    = $request->input('cnpj');
        
        $user->save();
        $userjur->user_id = $user->id;
        $userjur->save();

        return redirect()->route('end');
    }

}
