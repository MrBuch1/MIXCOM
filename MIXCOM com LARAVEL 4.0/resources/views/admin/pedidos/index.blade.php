@extends('layouts.appAdmin', ["current"=>"pedidos"])

@section('body')
<h1>Pedidos</h1>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">Pedido</th>
            <th scope="col">Comprador</th>
            <th scope="col">Produtos</th>
            <th scope="col">Valor do pedido</th>
            <!-- <th scope="col">Status</th> -->
            </tr>
        </thead>
        <tbody>
        @foreach ($pedidos as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->name }}</td>
            <td>{{$p->produto_id}}</td>
            <td>{{$p->valor}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
