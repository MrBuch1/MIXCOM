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
        $userfis->cpf = $request->input('cpf');
        $userfis->save();

        return redirect('/Inicio');
    }
}
