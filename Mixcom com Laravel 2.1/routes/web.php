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




Route::get('/produtoTeste', function () {
    return view('produtoTeste');
});
Route::get('/produtoTeste/{id}', 'ProdutoController@detalharProduto');

/*
<<<<<<< HEAD
Route::get('/editarPerfil', function(){
    return view('editarPerfil');
});

Route::get('/editarPerfilFisica', function(){
    return view('editarPerfilPFisica');
});
=======
>>>>>>> f524834dea1954166bec3f908f1df6b02976ae9c

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/