<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller {

    public function index(){

        $registros = Produto::where([
            'ativo' => 'S'
            ])->get();
            $registros = Produto::paginate(9);
            return view('produto.index', compact('registros'));
        }

    public function produto($id = null)
        {
            if( !empty($id) ) {
                $registro = Produto::where([
                    'id'    => $id,
                    'ativo' => 'S'
                    ])->first();

                    if( !empty($registro) ) {
                        $registro = Produto::find($id);
                        $array = explode('</br>', $registro->caracteristica);
                        return view('produto.produto', compact('registro', 'array'));
                    }
                }

                return redirect()->route('index');
        }

    public function productList($codtipo){
            $registros = Produto::where('codtipo', $codtipo)->get();
            return view('produto.index', compact('registros'));
        }



    public function store(Request $request)
    {
        $registros = Produto::where([
            'ativo' => 'S'
        ])->get();
        $registros = Produto::paginate(9);
        return view('admin.produtos.index', compact('registros'));
    }

/*  public function create()
{

}

    public function edit($id){

        $registros = Produto::find($id);
        return view("editar-produto", compact('registros'));

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

        }
        $produto->save();
        return redirect('/produtos');

    }*/
}
