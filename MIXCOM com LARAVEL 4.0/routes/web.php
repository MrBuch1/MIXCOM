<?php



/*---------------------------------------Inicio------------------use Symfony\Component\Routing\Route;--------------------*/

Route::get('/', function () {  return view('index'); });

/*------------------------------------------------------------------------------------*/

/*--------------------------------Cadastro de usuario---------------------------------*/

Auth::routes();
Route::get('/CadastroFisico', function () {  return view('auth/cadastroFis'); });
Route::get('/CadastroJuridico', function () {  return view('auth/cadastroJur'); });

/*------------------------------------------------------------------------------------*/

/*--------------------------------Carrinho de compras----------------------------------*/

Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');
Route::delete('/carrinho/remover', 'CarrinhoController@remover')->name('carrinho.remover');
Route::post('/carrinho/concluir', 'CarrinhoController@concluir')->name('carrinho.concluir');
Route::get('/carrinho/compras', 'CarrinhoController@compras')->name('carrinho.compras');
Route::post('/carrinho/cancelar', 'CarrinhoController@cancelar')->name('carrinho.cancelar');
Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');
Route::get('/carrinho/adicionar', function() {
    return redirect()->route('index');
});

/*------------------------------------------------------------------------------------*/

/*---------------------------------------Produtos--------------------------------------*/

Route::get('/produto/{id}', 'ProdutoController@index');
Route::get('/produtos', 'ProdutoController@index')->name('index');
Route::get('/produto/{id}', 'ProdutoController@produto')->name('produto');
Route::get('/produto/categoria/{codtipo}', 'ProdutoController@productList');

/*------------------------------------------------------------------------------------*/


/*---------------------------------------rotas testes--------------------------------------*/

/*------------------------------------------------------------------------------------*/
