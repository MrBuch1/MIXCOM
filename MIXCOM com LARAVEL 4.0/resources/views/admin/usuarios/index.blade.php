@extends('layouts.appAdmin', ["current"=>"usuarios"])

@section('body')
<h1>Pedidos</h1>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
            <!-- <th scope="col">Status</th> -->
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $u)
        <tr>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}
                <!--@if ($p->id == $p->pedido_id)
                {{ $p->name }}
                @endif-->
            </td>
            <td>{{$u->telefone}}</td>
            <!-- <td>{{$p->status}}</td> -->
            <!--<td>
                <a href="/produtos/editar/{{$p->id}}" class="btn btn-sm btn-primary">Editar</a>
                <a href="/produtos/apagar/{{$p->id}}" class="btn btn-sm btn-danger">Apagar</a>
            </td>-->
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
