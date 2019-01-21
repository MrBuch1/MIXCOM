<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Produto;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $produto->nome_produto = $request->input('nomeProduto');
        $produto->descricao = $request->input('descProduto');
        $produto->tipo = $request->input('tipoProduto');
        $produto->codtipo = $request->input('codtipo');
        $produto->categoria_id = $request->input('catProduto');
        $produto->caracteristica = $request->input('caracProduto');
        $produto->marca = $request->input('marcaProduto');
        $produto->valor = $request->input('pcProduto');
        $path = $request->file('imagemProduto')->store('imagens/Produtos', 'public');
        $produto->imagem = $path;
        $produto->save();
        return redirect()->route('produtos.listar');

    }


        public function edit($id){
            $cats = Categoria::all();
            $registro = Produto::find($id);
            return view('admin.editar-produto', compact('registro', 'cats'));

        }

        public function update(Request $request, $id){
            $produto = Produto::find($id);
            $img_antiga = $produto->imagem;
            $produto->nome_produto   = $request->input('nomeProduto') != null ? $request->input('nomeProduto') : $produto->nome_produto;
            $produto->tipo           = $request->input('tipo') != null ? $request->input('tipo') : $produto->tipo;
            $produto->codtipo        = $request->input('codtipo') != null ? $request->input('codtipo') : $produto->codtipo;
            $produto->marca          = $request->input('marca') != null ? $request->input('marca') : $produto->marca;
            $produto->descricao      = $request->input('descricao') != null ? $request->input('descricao') : $produto->descricao;
            $produto->categoria_id   = $request->input('catProduto') != null ? $request->input('catProduto') : $produto->categoria_id;
            $produto->caracteristica = $request->input('caracteristica') != null ? $request->input('caracteristica') : $produto->caracteristica;
            $produto->valor          = $request->input('valor') != null ? $request->input('valor') : $produto->valor;
            
            if($request->file('imagemProduto') != null){
                $path = $request->file('imagemProduto')->store('images', 'public');
                $produto->imagem = $path;
                Storage::disk('public')->delete($img_antiga);
            }

            $produto->save();
            return redirect()->route('produtos.listar');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        //Storage::disk('public')->delete($produto->imagem);
        $produto->delete();
        return redirect()->route('admin.index');
    }

    public function listar(){
        $produtos = DB::table('categorias')
            ->join('produtos', 'categorias.id', '=', 'produtos.categoria_id')
            ->select('categorias.*', 'categorias.nome', 'produtos.id', 'nome_produto', 'produtos.descricao', 'produtos.valor')->get();
            return view('admin.produtos.index', compact('listar', 'produtos'));
    }
}
