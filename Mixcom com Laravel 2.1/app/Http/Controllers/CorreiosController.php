<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
session_start();
class CorreiosController extends Controller
{
    public function calcula($cep){
    
    	$cep_destino = $cep;
		$cep_origem = '44075445';


		$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
		$url .= "nCdEmpresa=0&";
		$url .= "sDsSenha=0&";
		$url .= "nCdServico=41106&" ;
		$url .="sCepOrigem=" .$cep_origem."&";
		$url .="sCepDestino=" .$cep_destino."&";
		$url .="nVlPeso=2&";
		$url .="nCdFormato=1&";
		$url .="nVlComprimento=17&";
		$url .="nVlAltura=16&";
		$url .="nVlLargura=21&";
		$url .="nVlDiametro=11&";
		$url .="sCdMaoPropria=s&";
		$url .="nVlValorDeclarado=0&";
		$url .="sCdAvisoRecebimento=N&";
		$url .="StrRetorno=xml&";
		$url .="nIndicaCalculo=3&";

		$xml = simplexml_load_file($url);
		
		
		$frete = $xml->cServico;
		$valor = $frete->Valor;
		$prazo = $frete->PrazoEntrega;
    	return view("catraca",compact("valor","prazo"));
    	

    }

}
