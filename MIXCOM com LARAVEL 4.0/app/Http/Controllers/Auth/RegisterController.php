<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Userfis;
use App\Userjur;
use App\Endereco;

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

        $endereco = Endereco::create([
            'user_id' => $user->id,
            'rua' => $data['rua'],
            'cidade' => $data['cidade'],
            'bairro' => $data['bairro'],
            'numero' => $data['numero'],
            'complemento' => $data['complemento'],
            'uf' => $data['uf'],
            'cep' => $data['cep'],
            ]);


            if(isset($data['cpf'])){
                Userfis::create([
                'user_id' => $user->id,
                'cpf' => $data['cpf']
                ]);
            } else {
                Userjur::create([
                'user_id' => $user->id,
                'cnpj' => $data['cnpj'],
                'rsocial' => $data['rsocial']
                ]);
            }

        return $user;
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->nome = $request->input('nome');
        $user->telefone = $request->input('telefone');
        $user->email = $request->input('email');


        $endereco = new Endereco();
        $endereco->rua = $request->input('rua');
        $endereco->cidade = $request->input('cidade');
        $endereco->bairro = $request->input('bairro');
        $endereco->numero = $request->input('numero');
        $endereco->complemento = $request->input('complemento');
        $endereco->uf = $request->input('uf');
        $endereco->cep = $request->input('cep');

        $user->save();
        $user->endereco()->save($endereco);


    }

}
