@extends('layouts.appAdmin', ['current'=>'admin.produtos.produtoNovo'])

@section('body')
<h1>Novo Produto</h1>
<form action = "/produtos" method="POST" enctype="multipart/form-data">
    @csrf
    <div class = "form-group">
        <label for="nome">Nome do Produto</label>
        <input type = "text" class = "form-control" name="nomeProduto" id = "nome" placeholder = "Nome do Produto">

        <label for="desc">Descrição do Produto</label>
        <textarea class = "form-control" name="descProduto" id = "desc" placeholder = "Descrição do Produto"></textarea>

        <label for="cat">Categoria do Produto</label>
        <select id="cat" name = "catProduto" class="form-control">
            @foreach($cats as $c)
            <option value = "{{$c->id}}">{{$c->nome}}</option>
            @endforeach
        </select>

        <label for="codtipo">Codigo tipo</label>
            <select id="codtipo" name = "codtipo" class="form-control" placeholder = "Código do tipo do produto">
                <option value="1">COD 1 - Catraca</option>
                <option value="2">COD 2 - Biometria facial</option>
                <option value="3">COD 3 - Controlador de acesso</option>
                <option value="4">COD 4 - Soluções de estacionamento</option>
                <option value="5">COD 5 - Registrador eletronico de ponto</option>
                <option value="6">COD 6 - Cartografico</option>
                <option value="7">COD 7 - Controle de ponto</option>
                <option value="8">COD 8 - Controle de acesso</option>
            </select>

        <label for="tipo">Tipo do Produto</label>
        <select id="tipo" name = "tipoProduto" class="form-control">
            <option value = "Catraca">Catraca</option></option>
            <option value = "Catraca">Registrador Eletrônico de Ponto Biométrico</option></option>
            <option value = "Catraca">Registrador Eletrônico de Ponto Cartográfico</option></option>
            <option value = "Catraca">Controlador de Acesso</option></option>
            <option value = "Catraca">Soluções de Estacionamento</option></option>
        </select>

        <label for="carac">Características do Produto</label>
        <textarea class = "form-control" name="caracProduto" id = "carac" placeholder = "Dados técnicos, marca, memória, etc."></textarea>

        <label for="marca">Marca do Produto</label>
        <textarea class = "form-control" name="marcaProduto" id = "marca" placeholder = "Marca do Produto"></textarea>

        <label for="pc">Preço do Produto</label>
        <input type = "number" step="any" class = "form-control" name="pcProduto" id = "pc" placeholder = "Preço do Produto">

        <label for="img">Imagem</label>
        <input type="file" class="form-control-file" name="imagemProduto" id="img">


    </div>
    <button type="submit" class = "btn btn-primary btn-sm">Salvar</button>
    <button type="cancel" class = "btn btn-danger btn-sm">Cancelar</button>
</form>
@endsection
