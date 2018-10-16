<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends Controller {

  public function detalharProduto($id){

    $nome = ["Catraca de Inox RBC 5905","Catraca Balcão"];
    $descricao = ["descricao A","descricao B"];
    $preco = ["900,00","998,00"];
    $imagem = ["/imagens/imagensRedimencionadas/catraca1.png","/imagens/imagensRedimencionadas/catraca2.png"];
    $info = ['nome'=> $nome[$id], 'descricao'=> $descricao[$id], 'preco'=> $preco[$id], 'imagem'=> $imagem[$id]];
    return view('produtoTeste', compact($info));
  }

}
?>