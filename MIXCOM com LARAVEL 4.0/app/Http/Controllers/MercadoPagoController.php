<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Exception;
use MP;
use App\Pedido;
use App\Produto;
use App\PedidoProduto;
use App\Http\Controllers\CarrinhoController;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class MercadoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($idpedido)
    {
        /*$pedido = PedidoProduto::where([
            'pedido_id' => $idpedido,
            'valor'    => $produto->valor
        ])->get();*/

        if($idpedido == null){
            $idpedido = DB::table('pedido_produtos')->max('pedido_id');
        }
        $somapedido = DB::table('pedido_produtos')->where('pedido_id', $idpedido)->sum('valor');
        $pedido = (int)$somapedido;

        $compra = DB::table('pedido_produtos')->where('pedido_id', $idpedido)->value('pedido_id');

        $preference_data = array (
            "items" => array (
                array (
                    "title" => "Número do pedido: 00$compra",
                    "quantity" => 1,
                    "currency_id" => "BRL",
                    "unit_price" => $pedido
                )
            )
        );

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

        try {
            $preference = MP::create_preference($preference_data);
            return redirect()->to($preference['response']['init_point']);
        } catch (Exception $e){
            dd($e->getMessage());
        }
    }
}
