<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller {

  public function index($id){

  	$p = Produto::find($id);
  	$array = explode('</br>',$p->caracteristica);
  	return view('produtoTeste', compact('p', 'array'));

  }

  public function productList($tipo){
  	$produtos = Produto::where('tipo', $tipo)->get();
  	
  	return view('produtoCatraca', compact('produtos'));
  }
}
?>