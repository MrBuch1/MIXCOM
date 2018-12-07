<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller {

  public function index($id){

  	$p = Produto::find($id);
  	$array = explode('</br>',$p->caracteristica);
  	return view('produto', compact('p', 'array'));

  }

  public function productList($codtipo){
  	$produtos = Produto::where('codtipo', $codtipo)->get();
  	return view('produtoinfo', compact('produtos'));
  }
}

?>
