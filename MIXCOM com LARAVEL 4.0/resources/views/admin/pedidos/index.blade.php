@extends('layouts.appAdmin', ["current"=>"pedidos"])

@section('body')
 <h1>Categorias</h1>

    <table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">Pedido</th>
      <th scope="col">Nome do comprador</th>
      <th scope="col">Nome do produto</th>
      <th scope="col">Valor do pedido</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
 @foreach ($compras as $p)
        <tr>
            <td>{{$p->id }}</td>
                <td>
                    @if ($p-> $id == $p->pedido_id)
                    {{ $p->name}}
                    @endif
                </td>
            <td>{{$p->produto->nome }}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->status}}</td>
            <!--<td>
                <a href="/produtos/editar/{{$p->id}}" class="btn btn-sm btn-primary">Editar</a>
                <a href="/produtos/apagar/{{$p->id}}" class="btn btn-sm btn-danger">Apagar</a>
            </td>-->
        </tr>
    @endforeach
  </tbody>
</table>

@endsection
