@extends('layouts.app')
@section('content')
<br><br><br>


    <div class="container">
        <div class="row">
          <div class="caixa col-md-3 col-sm-3 col-xs-3">
            <center><h5>Minha conta</h5></center>
            <center><P>Olá, Usuário</P></center>
            <div class="col-12 mb-3">
            <hr>
        </div>
          </div>
    
          <div class="caixa col-md-9 col-sm-9 col-xs-9">
            <center><h4>Meus Dados</h4></center>
            <br>
            <h5  class="cortexto">Dados da conta</h5>
            <div class="col-9 mb-3">
            <hr>
            </div>
            <br>
            <p class="distancia2">Usuário  (cod do usuário) <a href="#" style="padding-left:28px">Modificar</a></p>
            <p class="distancia2">E-mail  (e-mail do usuário) <a href="# " style="padding-left:19px">Modificar</a></p>
            <p class="distancia2">Senha (senha do usuário) <a href="#" style="padding-left:25px">Modificar</a></p>

            <br>
            <h5  class="cortexto">Dados Pessoais</h5>
            <div class="col-9 mb-3">
            <hr>
            </div>
            <br>
            <p class="distancia2">Nome e sobrenome (nome do usuário) <a href="#" style="padding-left:18px">Modificar</a></p>
            <p class="distancia2">Documento (documento do usuário) <a href="#" style="padding-left:36px">Modificar</a></p>
            <p class="distancia2">Telefone (telefone do usuário) <a href="#" style="padding-left:85px">Modificar</a><a href="#" style="padding-left:20px">Adicionar</a></p>

            <br>
            <h5 class="cortexto">Cartões de crédito</h5>
            <div class="col-9 mb-3">
            <hr>
            </div>
            <br>
            <p class="distancia2">Numero do cartão (3 ultimos números do cartão) <a href="#" class="distancia2">Excluir</a></p>
            <p class="distancia2">Bandeira (bandeira do cartão) </p>
            <p class="distancia2">Telefone (telefone do usuário) </p>
            <p><a href="#" class="distancia2">Adicionar cartão</a></p>

            <br>
            <h5  class="cortexto">Endereços</h5>
            <div class="col-9 mb-3">
            <hr>
            </div>
            <br>
            <p class="distancia2">Rua (nome da rua) Número (número da casa) <a href="#" class="distancia2">Modificar</a></p>
            <p class="distancia2">Cep (numero do cep)</p>
            <p class="distancia2">Cidade (nome da cidade) Estado (sigla do estado)</p>
            <p><a href="#" class="distancia2">Adicionar endereço</a></p>
        </div>
    </div>
    </div>    
    
@endsection
