@extends('layouts.app')
@section('pagina_conteudo')

<br><br><br>
<br><br>
<div class="container">
    <div class="row">
        <div class="caixa col-md-4 col-sm-4 col-xs-4">
            <br>
            <p class="distancia7">(quantidade de produto) <a href="#">vizualizar produto</a></p>
            <p class="distancia7">frete para (lugar destino)</p>
            <div class="col-12 mb-3">
                <hr>
            </div>
            <b><p class="distancia7">Total a pagar</p></b>
            <p class="distancia7">cartão</p>
            <p class="distancia7">boleto</p>
        </div>

        <div class="caixa col-md-2 col-sm-2 col-xs-2">
            <br>
            <p class="distancia7">R$ 999,00</p>
            <p class="distancia7">R$ 12,00</p>
            <div class="col-12 mb-3">
                <hr>
            </div>
            <b><p class="distancia7">R$ 1.011,00</p></b>
            <p class="distancia7">R$ 1.011,00</p>
            <p class="distancia7">R$ 1.011,00</p>
        </div>

        <div class="caixa col-md-6 col-sm-3 col-xs-3">
            <h5>endereço de entrega</h5>
            <p class="distancia">Nome do Usuário</p>
            <p class="distancia">endereço, número</p>
            <p class="distancia">bairro</p>
            <p class="distancia">cidade, estado</p>
            <p class="distancia">cep</p>
            <a href="#" class="distancia">alterar endereço de entrega</a>
        </div>
        <div class="col-12 mb-3">
            <hr>
        </div>
    </div>
    <br>
    <h5 class="distancia7">Opções de entrega</h5>
    <table class="distancia7">
        <br>
        <tr>
            <td>
                <div class="card" style="width: 18rem; height: 120px">
                    <div class="card-body">
                        <input type="radio" name="idade" id="idade5" value="5">
                        <label for="idade5"><h5 class="card-title">rápido</h5></label>
                        <h6 class="card-subtitle mb-2 text-muted">de 7 a 9 dias úteis</h6>
                        <p class="card-subtitle mb-2 text-muted">R$19,00</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="card" style="width: 18rem; height: 120px">
                    <div class="card-body">
                        <input type="radio" name="idade" id="idade5" value="5">
                        <label for="idade5"><h5 class="card-title">econômica</h5></label>
                        <h6 class="card-subtitle mb-2 text-muted">de 10 a 13 dias úteis</h6>
                        <p class="card-subtitle mb-2 text-muted">R$12,00</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="card" style="width: 18rem; height: 120px">
                    <div class="card-body">
                        <input type="radio" class="corradio" name="idade" id="idade5" value="5">
                        <label for="idade5"><h5 class="card-title">pegue na loja</h5></label>

                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div class="col-12 mb-3">
        <hr>
    </div>
    <br>
    <svg-icon>
        <src href="sprite.svg#si-glyph-trolley-plus" />
    </svg-icon>
    <center><h5>Formas de pagamento</h5></center>

    <br>

    <center><table>
        <tr>
            <td>
                <div class="card" style="width: 12rem; height: 100px">
                    <div class="card-body">
                        <center><h6 class="card-title">cartão de crédito</h6>
                            <input type="button" class=" btn btn-outline-info " onclick="funcaoPagamento()" value="selecionar">
                        </center>
                    </div>
                </div>
            </td>
            <td>
                <div class="card" style="width: 12rem; height: 100px">
                    <div class="card-body">
                        <center>
                            <h6 class="card-title">cartão de débito</h6>
                            <input type="button" class=" btn btn-outline-info " onclick="funcaoPagamento()" value="selecionar">
                        </center>
                    </div>
                </div>
            </td>
            <td>
                <div class="card" style="width: 12rem; height: 100px">
                    <div class="card-body">
                        <center><h6 class="card-title">boleto</h6>
                            <input type="button" class=" btn btn-outline-info" onclick="funcaoPagamento()" value="selecionar">
                        </center>
                    </div>
                </div>
            </td>
            <td>
                <div class="card" style="width: 12rem; height: 100px">
                    <div class="card-body">
                        <center>
                            <h6 class="card-title">pegue na loja</h6>
                            <input type="button" class=" btn btn-outline-info " onclick="funcaoPagamento()" value="selecionar">
                        </center>
                    </div>
                </div>
            </td>
        </tr>
    </table></center>
</div>

@endsection
