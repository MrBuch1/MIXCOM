@extends('layouts.appAdmin', ["current"=>"produtos"])

@section('body')
<h1>Produtos</h1>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $p)

        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nome_produto}}</td>
            <td>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Mostrar mais</button>
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                        {{ $p->descricao }}
                </td>
                <td>{{ $p->valor}}</td>
                <td>{{ $p->nome}}</td>

                <td>
                    <a class = "btn btn-primary my-1" href="/produtos/editar/{{$p->id}}">Editar</a>
                    <a class = "btn btn-danger my-1" href="/produtos/apagar/{{$p->id}}">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
