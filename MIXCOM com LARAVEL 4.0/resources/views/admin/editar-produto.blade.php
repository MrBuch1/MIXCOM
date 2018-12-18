@extends('layouts.appAdmin', ['current'=>'admin.produtos.produtoNovo'])

@section('body')
    <h1>Editar Produto</h1>
    <form action = "/produtos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class = "form-group">
            <label for="nome">Nome do Produto</label>
            <input type = "text" class = "form-control" name="nome" id = "nome" placeholder = "{{$registro->nome}}">

            <label for="tipo">Tipo</label>
            <select id="tipo" name = "tipo" class="form-control" placeholder = "{{$registro->tipo}}">
              <option value="catraca">Catraca</option>
              <option value="controlador de acesso por biometria facial">Biometria facial</option>
              <option value="controlador de acesso">Controlador de acesso</option>
              <option value="solucoes de estacionamento">Soluções de estacionamento</option>
              <option value="registrador eletronico de ponto">Registrador eletronico de ponto</option>
              <option value="cartografico">Cartografico</option>
              <option value="controle de ponto">Controle de ponto</option>
              <option value="controle de acesso">Controle de acesso</option>
            </select>

            <label for="codtipo">Codigo tipo</label>
            <select id="codtipo" name = "codtipo" class="form-control" placeholder = "{{$registro->codtipo}},{{$registro->nome}}">
              <option value="1">COD 1 - Catraca</option>
              <option value="2">COD 2 - Biometria facial</option>
              <option value="3">COD 3 - Controlador de acesso</option>
              <option value="4">COD 4 - Soluções de estacionamento</option>
              <option value="5">COD 5 - Registrador eletronico de ponto</option>
              <option value="6">COD 6 - Cartografico</option>
              <option value="7">COD 7 - Controle de ponto</option>
              <option value="8">COD 8 - Controle de acesso</option>
            </select>

            <label for="marca">Marca</label>
            <input class = "form-control" name="marca" id = "marca" placeholder = "{{$registro->marca}}"></input>

            <label for="valor">Valor</label>
            <input type="number" class = "form-control" name="valor" id = "valor" placeholder = "{{$registro->valor}}"></input>

            <label for="categoria">Categoria</label>
            <select id="categoira" name = "categoria" class="form-control" placeholder = "{{$registro->categoria}}">
              <option value="controle de acesso">Controle de acesso</option>
              <option value="relogio de ponto">Relogio de ponto</option>
              <option value="software">Software</option>
            </select>

            <label for="descricao">Descrição do Produto</label>
            <textarea class = "form-control" name="descricao" id = "descricao" placeholder = "{{$registro->descricao}}"></textarea>

            <label for="caracteristica">Características do Produto</label>
            <textarea class = "form-control" name="caracteristica" id = "caracteristica" placeholder = "{{$registro->caracteristica}}"></textarea>

            <img class="img-responsive my-5" style="width: 300px;" src="{{ asset($registro->imagem) }}">
            <label for="img">Imagem do Produto</label>
            <input type="file" class="form-control-file" name="imagem" id="imagem">


        </div>
        <button type="submit" class = "btn btn-success mr-2">Alterar</button>
        <a href="{{route('inicio')}}" class="btn btn-danger mr-2">{{ __('Cancelar')}}</a>
    </form>
@endsection
