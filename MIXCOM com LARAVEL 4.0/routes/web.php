<?php



/*---------------------------------------Inicio--------------------------------------*/

Route::get('/', function () {  return view('index'); })->name('inicio');

/*------------------------------------------------------------------------------------*/

/*---------------------------------------Admin--------------------------------------*/
Route::prefix('/admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@index')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/pedidos', 'PedidoController@pedidos')->name('pedidos');
});


/*Route::get('admin/cadastrar-produto', 'ProdutoController@create');
Route::post('/produtos', 'ProdutoController@store');
Route::get('/produtos', 'ProdutoController@store');
Route::post('/admin/editar-produto/{id}', 'ProdutoController@update');*/

/*------------------------------------------------------------------------------------*/


/*--------------------------------Cadastro de usuario---------------------------------*/

Auth::routes();
Route::get('/CadastroFisico', function () {  return view('auth/cadastroFis'); });
Route::get('/CadastroJuridico', function () {  return view('auth/cadastroJur'); });


Route::get('/editarFis/{id}', 'Auth\RegisterController@editFis');
Route::post('/editarFis/{id}', 'Auth\RegisterController@updatefis');

Route::get('/editarJur/{id}', 'Auth\RegisterController@editJur');
Route::post('/editarJur/{id}', 'Auth\RegisterController@updatejur');

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
Route::get('/produtos', 'ProdutoController@index');

Route::get('/produto', 'ProdutoController@produtoAdmin')->name('produtos.listar');
Route::get('/produtos/novo', 'ProdutoController@create')->name('novo.produto');
Route::get('/produtos/editar/{id}', 'ProdutoController@edit')->name('produtos.editar');
Route::post('/produtos', 'ProdutoController@store');
Route::post('/produtos/editar/{id}', 'ProdutoController@update');


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

Route::get('/desenvolvedores', function () {  return view('desenvolvedores'); });

/*------------------------------------------------------------------------------------*/
