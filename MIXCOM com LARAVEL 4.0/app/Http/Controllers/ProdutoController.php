<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Produto;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{

    public function index()
    {

        $registros = Produto::where([
            'ativo' => 'S',
        ])->get();
        $registros = Produto::paginate(9);
        $cats = Categoria::all();

        return view('produto.index', compact('registros'));
    }

    public function produto($id = null)
    {
        if (!empty($id)) {
            $registro = Produto::where([
                'id' => $id,
                'ativo' => 'S',
            ])->first();

            if (!empty($registro)) {
                $registro = Produto::find($id);
                $array = explode('</br>', $registro->caracteristica);
                return view('produto.produto', compact('registro', 'array'));
            }
        }

        return redirect()->route('index');
    }

    public function productList($codtipo)
    {
        $registros = Produto::where('codtipo', $codtipo)->get();
        return view('produto.index', compact('registros'));
    }

    public function produtoAdmin()
    {
        $registros = Produto::where([
            'ativo' => 'S',
        ])->get();
        $registros = Produto::paginate(9);
        return view('admin.produtos.index', compact('registros'));

    }

    public function create()
    {
        $cats = Categoria::all();
        return view('admin.produtos.produtoNovo', compact('cats'));

    }

    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->input('nomeProduto');
        $produto->descricao = $request->input('descProduto');
        $produto->tipo = $request->input('tipoProduto');
        $produto->categoria_id = $request->input('catProduto');
        $produto->caracteristica = $request->input('caracProduto');
        $produto->valor = $request->input('pcProduto');
        $path = $request->file('imagemProduto')->store('imagens', 'public');
        $produto->imagem = $path;
        $produto->save();
        return redirect('/admin');

    }


        public function edit($id){

            $registros = Produto::find($id);
            return view("admin/editar-produto", compact('registros'));

        }

        public function update(Request $request, $id){
            $produto = Produto::find($id);
            $img_antiga = $produto->imagem;
            $produto->nome = $request->input('nomeProduto');
            $produto->descricao = $request->input('descProduto');
            $produto->id_categoria = $request->input('catProduto');
            $produto->quantidade = $request->input('qtdProduto');
            $produto->preco = $request->input('pcProduto');
            if($request->file('imagemProduto') != null){
            $path = $request->file('imagemProduto')->store('images', 'public');
            $produto->imagem = $path;
            Storage::disk('public')->delete($img_antiga);

            $produto->save();
            return redirect('/produtos');

        }


    }
}
