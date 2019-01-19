@extends('layouts.appAdmin', ["current"=>"usuarios"])

@section('body')
<h1>Usuários</h1>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Endereço</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $u)      
        <tr>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->telefone}}</td>
        <td>
            <b>Cidade: </b>{{ $u->cidade }}<br>    
            <b>Estado: </b>{{ $u->uf }}<br>
            <b>Rua: </b>{{ $u->cidade }} - <b>Número: </b>{{ $u->numero}} <br>
            <b>Bairro: </b>{{ $u->bairro }} - <b>Cep: </b>{{ $u->cep }}<br>
            <b>Complemento: </b>{{ $u->complemento }}
        </td>
        </tr>
        @endforeach    
    </tbody>
</table>

@endsection