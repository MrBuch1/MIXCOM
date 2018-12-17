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
        @foreach($registros as $p)

        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nome}}</td>
            <td>
                <table>
                    <tr><td><span style="color:#ff0000; cursor:pointer" onclick="document.getElementById('expandir').style.display=''" >Mostrar</span></td></tr>
                    <tr><td id="expandir" style="display:none;"><div>{{ $p->descricao }}</div><span style="color:#ff0000; cursor:pointer" onclick="document.getElementById('expandir').style.display='none'">Recolher</span></td></tr>
                </table>

            </td>
            <td>{{ $p->valor}}</td>
            <td>{{ $p->categoria}}</td>

            <td>
                <a class = "btn btn-primary" href="/produtos/editar/{{$p->id}}">Editar</a>
                <a class = "btn btn-danger" href="/produtos/apagar/{{$p->id}}">Excluir</a>
            </td>
        </tr>
        @endforeach
        {{ $registros->links() }}
    </tbody>
</table>
{{ $registros->links() }}
@endsection
