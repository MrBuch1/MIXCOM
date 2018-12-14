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
Route::get('/produto/{id}', 'ProdutoController@index');

/*------------------------------------------------------------------------------------*/


/*---------------------------------------Rotas testes--------------------------------------*/
Route::get('/pagamento', 'MercadoPagoController@index')->name('pagamento');

use App\User;
use App\Endereco;
use App\Userfis;

Route::get('/teste', function(){
    $user = user::all();
    foreach($user as $u){
        echo "<br>";
        echo "<p>id: " . $u->id . "</p>";
        echo "<p>Nome: " . $u->name . "</p>";
        echo "<p>Telefone: " . $u->telefone . "</p>";
        echo "<p>Email: " . $u->email . "</p>";
        echo "<p>Enderço: " . $u->endereco->rua . "</p>";
        echo "<p>Cidade: " . $u->endereco->cidade . "</p>";
        echo "<p>Bairro: " . $u->endereco->bairro . "</p>";
        echo "<p>Complemento: " . $u->endereco->complemento . "</p>";
        echo "<p>Complemento: " . $u->endereco->complemento . "</p>";
        echo "<p>CEP: " . $u->endereco->cep . "</p>";
        echo "<p>UF: " . $u->endereco->uf . "</p>";
    }
});
/*------------------------------------------------------------------------------------*/

/*---------------------------------------Admin--------------------------------------*/

Route::get('admin/cadastrar-produto', 'ProdutoController@create');
Route::post('/produtos', 'ProdutoController@store');
Route::get('/produtos', 'ProdutoController@store');
Route::post('/admin/editar-produto/{id}', 'ProdutoController@update');
