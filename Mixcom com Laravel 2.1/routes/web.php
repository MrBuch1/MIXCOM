<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/teste', function () {
    return view('cadastrarEndereco');
});
Route::get('/testeCarrinho', function () {
    return view('carrinho');
});
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

    Route::get('telaCadastroFisica', function () {
        return view('telaCadastroFis');
    })->name('telaCadastroFis');

    Route::get('cadastroJuridico', function () {
        return view('telaCadastroJur');
    })->name('telaCadastroJur');

});

Route::get('cadastroJuridico', function () {
    return view('auth\telaCadastroJur');
})->name('cadastrojur');
Route::post('cadastroJuridico', 'RegisterJurController@store');

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


Route::get('test', function()
{
    dd(Config::get('mail'));
});


Route::get('/produtoTeste/{id}', 'ProdutoController@index');


Route::get('/editarPerfil', function(){
    return view('editarPerfil');
});

Route::get('editarPerfilJur/{id}', 'RegisterJurController@edit');
Route::post('editarPerfilJur/{id}', 'RegisterJurController@update');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('calcula/{cep}', 'CorreiosController@calcula');

Route::get('/produtosteste/{tipo}', 'ProdutoController@productList');

