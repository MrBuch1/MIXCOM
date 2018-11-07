@extends('layouts.app')
@section('content')
<!--Inicio Corpo-->
<br><br><br><br>
<div class="container">
    @if(!isset($p))
        <h1>não definido</h1>
    @else
    <div class="row">
        <div class="caixa col-md-3 col-sm-3 col-xs-3">
            <div class="col-12 mb-3">
                <hr>
            </div>

            <div id="main-menu" class=" list-group ">
                <a href="#sub-menu" class=" sidebar-header list-group-item active" data-toggle="collapse" data-parent="#main-menu">CONTROLE
                    DE ACESSOS<span class="caret"></span></a>

                <div class="Estilomenu collapse list-group-level1" id="sub-menu">
                    <a href="produtocatraca.html" class="list-group-item" data-parent="#sub-menu">
                        CATRACAS</a>
                    <a href="controleface.html" class="list-group-item" data-parent="#sub-menu">CONTROLADOR DE ACESSO
                        POR BIOMETRIA FACIAL</a>
                    <a href="controladordeacesso.html" class="list-group-item" data-parent="#sub-menu">CONTROLADOR DE
                        ACESSO</a>
                </div>

                <a href="#sub-menu1" class=" sidebar-header list-group-item active" data-toggle="collapse" data-parent="#main-menu">RELÓGIOS
                    DE PONTOS<span class="caret"></span></a>
                <div class="collapse list-group-level1" id="sub-menu1">
                    <a href="registradoreletro.html" class="list-group-item" data-parent="#sub-menu1">REGISTRADOR
                        ELETRÓNICO DE PONTO(REP)</a>
                    <a href="registradorcartografico.html" class="list-group-item" data-parent="#sub-menu1">CARTOGRAFICO</a>
                    <a href="softsolucoes.html" class="list-group-item" data-parent="#sub-menu1">SOLUÇÕES DE
                        ESTACIONAMENTO</a>
                </div>

                <a href="#sub-menu2" class=" sidebar-header list-group-item active" data-toggle="collapse" data-parent="#main-menu">SOFTWARES<span
                        class="caret"></span></a>
                <div class="collapse list-group-level1" id="sub-menu2">
                    <a href="softcontroledeponto.html" class="list-group-item" data-parent="#sub-menu2">CONTROLE DE
                        PONTO</a>
                    <a href="softcontroledeacesso.html" class="list-group-item" data-parent="#sub-menu2">CONTROLE DE
                        ACESSO</a>
                </div>

                <a href="#sub-menu3" class=" sidebar-header list-group-item active" data-toggle="collapse" data-parent="#main-menu">ACESSORIOS<span
                        class="caret"></span></a>
                <div class="collapse list-group-level1" id="sub-menu3">
                    <a href="#" class="list-group-item" data-parent="#sub-menu3">BOBINAS TÉRIMCAS PARA REP</a>
                    <a href="#" class="list-group-item" data-parent="#sub-menu3">CHAPEIRAS</a>
                    <a href="#" class="list-group-item" data-parent="#sub-menu3">CARTÕES 100 UND</a>
                    <a href="#" class="list-group-item" data-parent="#sub-menu3">CRACHÁS</a>
                    <a href="#" class="list-group-item" data-parent="#sub-menu3">FITA</a>

                </div>
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
                        <p><img src="{{URL::to('imagens\imagensRedimencionadas/catraca1.png')}}"></p>
                    </td>
                    <td width="571" valign="top">
                        <p>
                            <h5><strong>{{$p->nome}}</strong></h5>
                            <p align="justify" class="Estilo2">{{$p->descricao}}</p>
                            <br>
                            <table class="table  table-bordered table-condensed">
                                <tr>
                                    <td>
                                        <center>
                                            <h3 class=" distancia card-title mb-2 my-3">{{$p->valor}}</h3>
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
                            <p><strong>Caractéristicas</strong></p>
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
