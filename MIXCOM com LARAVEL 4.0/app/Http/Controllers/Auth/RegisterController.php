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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                'rsocial' => $data['rsocial'],
                ]);
            } 

        return $user;
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
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

    public function editFis($id)
    {
        $user = User::find($id);
        $userfis = UserFis::find($id)->get();
        return view('auth\editarFis', compact('user','userfis'));
    }

    public function editJur($id)
    {
        $user = User::find($id);
        $userjur = Userjur::find($id);
        return view('auth\editarJur', compact('user','userjur'));
    }

    public function updatefis(Request $request, $id)
    {
        $user = User::find($id);
        $userfis = Userfis::find($id);
        $user->name = $request->input('name');
        $user->telefone = $request->input('telefone');
        $user->email = $request->input('email');
        $userfis->cpf = $request->input('cpf');

        $user->save();
        return redirect('/index');
    }

    public function updatejur(Request $request, $id)
    {
        $user = User::find($id);
        $userjur = Userjur::find($id);
        $user->name = $request->input('name');
        $user->telefone = $request->input('telefone');
        $user->email = $request->input('email');
        $userjur->rsocial = $request->input('rsocial');
        $userjur->cnpj = $request->input('cnpj');

        $user->save();
        return redirect('/index');
    }

    public function listar(){
        $users = DB::table('users')->select('name')->orderBy('updated_at', 'desc')->get();
        $users = DB::table('users')->select('email')->orderBy('updated_at', 'desc')->get();
        $users = DB::table('users')->select('telefone')->orderBy('updated_at', 'desc')->get();

        return view('admin.usuarios.index', compact('listar', 'users'));
    }

}
