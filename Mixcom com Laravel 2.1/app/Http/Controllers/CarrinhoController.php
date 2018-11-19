<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use App\Produto;
use App\PedidoProduto;

class CarrinhoController extends Controller
{
    public function index(){
        return view('carrinho');
    }

    public function adicionar(){

        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idproduto = $req->input('id');

        $produto = Produto::find($idproduto);
        if(empty($produto->id)){
            $req->session()->flash('mensagem-falha', 'Produto não encontrado!');
            return redirect()->route('testeCarrinho');
        }

        $idusuario = Auth::id();

        $idpedido = Pedido::consultaId([
            'user_id' => $idusuario,
            'status' => 'RE' //reservada
        ]);

        if(empty($idpedido)){
            $pedido_novo = Pedido::create([
                'user_id' => $idusuario,
                'status' => 'RE'
            ]);

            $idpedido = $pedido_novo->id;
        }

        PedidoProduto::create([
            'pedido_id' => $idpedido,
            'produto_id' => $idproduto,
            'valor' => $produto->valor,
            'status' => 'RE'
        ]);

        $req->session()->flash('mensagem-sucesso', 'Produto adicionado ao carrinho!');

        return redirect()->route('testeCarrinho');
    }
}
