<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MercadoPagoController;
use App\Pedido;
use App\Produto;
use App\PedidoProduto;
use App\CupomDesconto;
use App\User;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    function __construct()
    {
        // obriga estar logado;
        $this->middleware('auth:admin');

    }

    public function index()
    {

        $pedidos = Pedido::where([
            'status' => 'RE',
            'user_id' => Auth::id()
        ])->get();

        return view('carrinho.index', compact('pedidos'));
    }

    public function adicionar()
    {

        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idproduto = $req->input('id');

        $produto = Produto::find($idproduto);
        if (empty($produto->id)) {
            $req->session()->flash('mensagem-falha', 'Produto não encontrado em nossa loja!');
            return redirect()->route('carrinho.index');
        }

        $idusuario = Auth::id();

        $idpedido = Pedido::consultaId([
            'user_id' => $idusuario,
            'status' => 'RE', // Reservada
            //'valor' => $pedido
        ]);

        if (empty($idpedido)) {
            $pedido_novo = Pedido::create([
                'user_id' => $idusuario,
                'status' => 'RE'
            ]);

            $idpedido = $pedido_novo->id;

        }

        PedidoProduto::create([
            'pedido_id' => $idpedido,
            'produto_id' => $idproduto,
            //'valor' => $produto->valor,
            'status' => 'RE'
        ]);

        $req->session()->flash('mensagem-sucesso', 'Produto adicionado ao carrinho com sucesso!');

        return redirect()->route('carrinho.index');

    }

    public function remover()
    {

        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idpedido = $req->input('pedido_id');
        $idproduto = $req->input('produto_id');
        $remove_apenas_item = (boolean)$req->input('item');
        $idusuario = Auth::id();

        $idpedido = Pedido::consultaId([
            'id' => $idpedido,
            'user_id' => $idusuario,
            'status' => 'RE' // Reservada
        ]);

        if (empty($idpedido)) {
            $req->session()->flash('mensagem-falha', 'Pedido não encontrado!');
            return redirect()->route('carrinho.index');
        }

        $where_produto = [
            'pedido_id' => $idpedido,
            'produto_id' => $idproduto
        ];

        $produto = PedidoProduto::where($where_produto)->orderBy('id', 'desc')->first();
        if (empty($produto->id)) {
            $req->session()->flash('mensagem-falha', 'Produto não encontrado no carrinho!');
            return redirect()->route('carrinho.index');
        }

        if ($remove_apenas_item) {
            $where_produto['id'] = $produto->id;
        }
        PedidoProduto::where($where_produto)->delete();

        $check_pedido = PedidoProduto::where([
            'pedido_id' => $produto->pedido_id
        ])->exists();

        if (!$check_pedido) {
            Pedido::where([
                'id' => $produto->pedido_id
            ])->delete();
        }

        $req->session()->flash('mensagem-sucesso', 'Produto removido do carrinho com sucesso!');

        return redirect()->route('carrinho.index');
    }

    public function concluir()
    {
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idpedido = $req->input('pedido_id');
        $idusuario = Auth::id();

        $check_pedido = Pedido::where([
            'id' => $idpedido,
            'user_id' => $idusuario,
            'status' => 'RE' // Reservada
        ])->exists();

        if (!$check_pedido) {
            $req->session()->flash('mensagem-falha', 'Pedido não encontrado!');
            return redirect()->route('carrinho.index');
        }

        $check_produtos = PedidoProduto::where([
            'pedido_id' => $idpedido
        ])->exists();
        if (!$check_produtos) {
            $req->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
            return redirect()->route('carrinho.index');
        }


        PedidoProduto::where([
            'pedido_id' => $idpedido
        ])->update([
            'status' => 'RE'
        ]);
        Pedido::where([
            'id' => $idpedido
        ])->update([
            'status' => 'RE'
        ]);

        //$req->session()->flash('mensagem-sucesso', 'Compra concluída com sucesso!');
        return (new MercadoPagoController)->index($idpedido);
        //return redirect()->route('carrinho.compras');

        PedidoProduto::where([
            'pedido_id' => $idpedido
        ])->update([
            'status' => 'PA'
        ]);
        Pedido::where([
            'id' => $idpedido
        ])->update([
            'status' => 'PA'
        ]);
    }

    public function compras()
    {

        $compras = Pedido::where([
            'status' => 'PA',
            'user_id' => Auth::id()
        ])->orderBy('updated_at', 'desc')->get();

        $user = PedidoProduto::where([
            'status' => 'PA',
            'pedido_id' => Auth::id()
        ])->orderBy('updated_at', 'desc')->get();

        $cancelados = Pedido::where([
            'status' => 'CA',
            'user_id' => Auth::id()
        ])->orderBy('updated_at', 'desc')->get();

        return view('admin.pedidos.index', compact('compras', 'user'));

    }

    public function cancelar()
    {
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idpedido = $req->input('pedido_id');
        $idspedido_prod = $req->input('id');
        $idusuario = Auth::id();

        if (empty($idspedido_prod)) {
            $req->session()->flash('mensagem-falha', 'Nenhum item selecionado para cancelamento!');
            return redirect()->route('carrinho.compras');
        }

        $check_pedido = Pedido::where([
            'id' => $idpedido,
            'user_id' => $idusuario,
            'status' => 'PA' // Pago
        ])->exists();

        if (!$check_pedido) {
            $req->session()->flash('mensagem-falha', 'Pedido não encontrado para cancelamento!');
            return redirect()->route('carrinho.compras');
        }

        $check_produtos = PedidoProduto::where([
            'pedido_id' => $idpedido,
            'status' => 'PA'
        ])->whereIn('id', $idspedido_prod)->exists();

        if (!$check_produtos) {
            $req->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
            return redirect()->route('carrinho.compras');
        }

        PedidoProduto::where([
            'pedido_id' => $idpedido,
            'status' => 'PA'
        ])->whereIn('id', $idspedido_prod)->update([
            'status' => 'CA'
        ]);

        $check_pedido_cancel = PedidoProduto::where([
            'pedido_id' => $idpedido,
            'status' => 'PA'
        ])->exists();

        if (!$check_pedido_cancel) {
            Pedido::where([
                'id' => $idpedido
            ])->update([
                'status' => 'CA'
            ]);

            $req->session()->flash('mensagem-sucesso', 'Compra cancelada com sucesso!');

        } else {
            $req->session()->flash('mensagem-sucesso', 'Item(ns) da compra cancelado(s) com sucesso!');
        }

        return redirect()->route('carrinho.compras');
    }

    public function listar(){
 
        /*
        $pedidos = DB::table('pedido_produtos')
            ->join('pedidos', 'pedidos_produto.pedido', '=', 'pedidos.id')
            ->select('pedido_produtos.*', 'users.name', 'pedidos.id', 'pedido.')->orderBy('updated_at', 'desc')->get();
        return view('admin.pedidos.index', compact('listar', 'pedidos'));
        */
        
        $pedidos = DB::table('pedidos')
            ->join('pedido_produtos', 'pedidos.id', '=', 'pedido_produtos.pedido_id')
            ->join('users', 'pedidos.user_id', '=', 'users.id')
            ->join('produtos', 'pedido_produtos.produto_id', '=', 'produtos.id')
            ->select('pedidos.*', 'users.name', 'pedido_produtos.produto_id', 'pedido_produtos.valor', 'produtos.nome_produto')->orderBy('updated_at', 'desc')->get();
        return view('admin.pedidos.index', compact('listar', 'pedidos'));

    }


}
