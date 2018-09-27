<?php

Route::get('/', function () {
    return view('index');
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
Route::get('\cadastroJuridico', 'RegisterController@validator');
Route::post('\cadastroJuridico', 'RegisterController@create');

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
