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

class MercPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pedido = PedidoProduto::where([
            'pedido_id' => $idpedido,
            'valor'    => $produto->valor
        ])->get();
        
        $preference_data = array (
            "items" => array (
                array (
                    "title" => "Pagamento MIXCOM",
                    "quantity" => 1,
                    "currency_id" => "BRL",
                    "unit_price" => $pedido
                )
            )
        );

        try {
            $preference = MP::create_preference($preference_data);
            return redirect()->to($preference['response']['init_point']);
        } catch (Exception $e){
            dd($e->getMessage());
        }
    }
}