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
                            <h4 align="center"><strong>{{$registro->nome}}</strong></h4><br>
                            <p align="justify" class="Estilo2">{{$registro->descricao}}</p>
                            <br>
                            <table class="table  table-bordered table-condensed">
                                <tr>
                                    <td>
                                        <center>
                                            <h3 class=" distancia card-title mb-2 my-3">R$ {{$registro->valor}}</h3>
                                            <p class=" distancia card-subtitle mb-2 text-muted my-3">parcele em até 10x sem juros</p>
                                            <input type="button" class=" btn btn-outline-success botao2 " onclick="funcaoComprar()"
                                                value="Comprar">
                                        </center>
                                        <br>
                                        <a href="#">Formas de Pagamento</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Calcule frete e prazo </p>
                                        <form class="form-inline my-5 my-lg-0">

                                            <input class="form-control mr-sm-2" type="search" placeholder="_______-___"
                                                aria-label="Pesquisar">
                                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">OK</button>
                                        </form>
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

                    <td><a href="#"><img class="img-responsive" src="{{asset ('imagens/carrinho.png')}}" title="Carrinho!"></a></td>

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
            <div class="container">
                <div class="row blog">
                    <div class="col-md-12">
                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#blogCarousel" data-slide-to="1"></li>
                            </ol>

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->

                            </div>
                            <!--.carousel-inner-->
                        </div>
                        <!--.Carousel-->


                    </div>
                </div>
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
