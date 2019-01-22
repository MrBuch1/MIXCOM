@extends('layouts.app')
@section('pagina_conteudo')
<!--Inicio Corpo-->
<br><br><br><br>
<div class="container">
    @if(!isset($registro))
        <h1>não definido</h1>
    @else
    <div class="row">
        <div class="caixa col-md-3 col-sm-3 col-xs-3">
            <div class="col-12 mb-3">
                <hr>
            </div>
        </div>
        <div class="caixa col-md-8 col-sm-8 col-xs-8">
            <div class="col-12 mb-3">
                <hr>
            </div>
            <br>
            <table>
                <tr>
                    <td class="espaco" width="229" valign="top">
                        <p><img class="img-responsive" style="width: 300px;" src="{{ asset($registro->imagem) }}"></p>
                    </td>
                    <td width="571" valign="top">
                        <p>
                            <h4 valign="center"><strong>{{$registro->nome_produto}}</strong></h4><br>
                            <p valign="justify" class="Estilo2">{{$registro->descricao}}</p>
                            <br>
                            <table class="table  table-bordered table-condensed">
                                <tr>
                                    <td>
                                        <center>
                                            <h3 class=" distancia card-title mb-2 my-3">R$ {{$registro->valor}}</h3>
                                            <p class="distancia card-subtitle mb-2 text-muted my-3">Parcele em até 10x sem juros</p>
                                            <form method="POST" action="{{ route('carrinho.adicionar') }}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $registro->id }}">
                                                <button  class="btn btn-primary">Comprar</button>
                                            </form>
                                        </center>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Entrega a combinar com o Vendedor</p>
                                    </td>
                                </tr>



                            </table>
                    </td>
                </tr>
            </table>
        </div>
        <div class="caixa col-md-1 col-sm-1 col-xs-1">
            <div class="col-12 mb-3">
                <hr>
            </div>
            <table>
                <tr>

                    <td><a href="/carrinho"><img class="img-responsive" src="{{asset ('imagens/carrinho.png')}}" title="Carrinho!"></a></td>

                </tr>

            </table>
        </div>
    </div>

</div>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="caixa col-md-12 col-sm-12 col-xs-12">
            <div class="col-12 mb-3">
                <hr>
            </div>
            <h4 class="text-muted">Aproveite e veja Também</h4>
            <br>
            @component('components.carousel_prod')@endcomponent
                <br><br><br>
                <div class="container">
                    <div class="row">
                        <div class="caixa col-md-12 col-sm-12 col-xs-12">
                            <div class="col-12 mb-3">
                                <hr>
                            </div>
                            <p><strong>Características</strong></p>
                            @foreach($array as $arr)
                            <p align="justify" class="Estilo2">
                                {{$arr}}</p>
                            @endforeach
                        </div>

                    </div>
                </div>

@endif
                <!--Fim Corpo-->
                @endsection
