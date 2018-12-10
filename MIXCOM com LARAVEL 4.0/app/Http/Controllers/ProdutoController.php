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
        }
