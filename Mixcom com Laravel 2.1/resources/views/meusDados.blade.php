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
            <p class="distancia2">Rua (nome da rua) Número (número da casa) <a href="#" class="distancia2">Excluir</a></p>
            <p class="distancia2">Cep (numero do cep)</p>
            <p class="distancia2">Cidade (nome da cidade) Estado (sigla do estado)</p>
            

            <!-- Button trigger modal -->

<p><a  data-toggle="modal" data-target="#exampleModal" href="#" class="distancia2">Adicionar endereço</a></p>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Endereço</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             <!-- Inicio do formulario -->
      <form method="get" action=".">

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Cep:</label>
            <div class="col-sm-10">
                <table>
                    <tr>
                        <td>
                            <input class="form-control" style="width:200px"  name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                            onblur="pesquisacep(this.value);"/>
                        </td>
                        <td>
                           <input type="button" class=" btn btn-outline-primary  " onclick="meu_callback()"
                        value="Pesquisar"></label><br />
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label ">Rua</label>
            <div class="col-sm-10">
            <input class="form-control" name="rua" type="text" id="rua" size="50" />
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">N°:</label>
            <div class="col-sm-10">
            <input style="width:50px" class="form-control" name="num" type="int" id="num" size="10" />
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Bairro:</label>
            <div class="col-sm-10">
            <input class="form-control"  name="bairro" type="text" id="bairro" size="40" />
            </div>
        </div>
         <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Cidade:</label>
            <div class="col-sm-10">
            <input class="form-control"  name="cidade" type="text" id="cidade" size="40" />
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Estado:</label>
            <div class="col-sm-10">
            <input style="width:50px"  class="form-control"  name="uf" type="text" id="uf" size="2" />
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">IBGE:</label>
            <div class="col-sm-10">
            <input class="form-control"  name="ibge" type="text" id="ibge" size="8" />
            </div>
        </div>
        
        
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Sair</button>
        <button type="button" class="btn btn-outline-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
            
        </div>
    </div>
    </div>    
    
@endsection


