<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastroEndereco', function () {
    return view('cadastrarEndereco');
});
Route::get('/testeCarrinho', 'CarrinhoController@index');
Route::get('testeCarrinho', 'CarrinhoController@adicionar');

Route::get('/testeMeusDados', function () {
    return view('meusDados');
});
Route::get('/testeFinalizarCompra', function () {
    return view('finalizarCompra');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Inicio', function () {
    return view('index');
})->name('index');

Route::prefix('/Cadastro')->group(function () {

    Route::get('cadastroFisico', 'RegisterFisController@index')->name('CadastroFis');
    Route::post('cadastroFisico', 'RegisterFisController@store');

    Route::get('cadastroJuridico', 'RegisterJurController@index')->name('telaCadastroJur');
    Route::post('cadastroJuridico', 'RegisterJurController@store');

});

Route::get('/cadastroJuridico', function () {
    return view('telaCadastroJur');
});
Route::get('\cadastroJuridico', 'Auth\RegisterController@validator');
Route::post('\cadastroJuridico', 'Auth\RegisterController@create');

Route::get('CadastroEndereco', function(){
    return view('cadastrarEndereco');
})->name('end');
Route::post('CadastroEndereco', 'RegisterEndController@store');

Route::get('/Cadastrar', function(){
    return view('auth/register');
});

Route::prefix('/Produto')->group(function () {

Route::get('Catracas', function () {
    return view('produtoCatraca');
})->name('produtoCatraca');

Route::get('ComprarCatracas', function () {
    return view('catraca');
})->name('catraca');


});

Route::get('alterar-senha', function () {
    return view('passwords\reset');
})->name('altersenha');




Route::get('/produtoTeste', function () {
    return view('produtoTeste');
});

Route::get('test', function()
{
    dd(Config::get('mail'));
});


Route::get('/produtoTeste/{id}', 'ProdutoController@index');

Route::get('mercadopago', function(){
    return view('mercadopago');
});

/*
Route::get('/editarPerfil', function(){
    return view('editarPerfil');
});

Route::get('/editarPerfilFisica', function(){
    return view('editarPerfilPFisica');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/