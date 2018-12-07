@extends('layouts.app')
@section('content')

<!--Inicio Form-->
<h1>Cadastro de Produto</h1>
    <form action = "/produto" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="">Nome do Produto</label>
    <input type="text" class="form-control" id="nomeProduto" placeholder = "Nome do Produto">

    <label for="">Marca</label>
    <input type="text" class="form-control" id="marcaProduto" placeholder="Marca">

    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!--Fim Form-->
@endsection
