@extends('layouts.app')
@section('content')
<!--Inicio Corpo-->
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="caixa col-md-3 col-sm-3 col-xs-3">
            <div class="col-12 mb-3">
                <hr>
            </div>

            <div id="main-menu" class=" list-group ">
                <a href="#sub-menu" class=" sidebar-header list-group-item active" data-toggle="collapse" data-parent="#main-menu">CONTROLE
                    DE ACESSO<span class="caret"></span></a>

                <div class="Estilomenu collapse list-group-level1" id="sub-menu">
                    <a href="/produtosteste/Catraca" class="list-group-item" data-parent="#sub-menu">
                        CATRACAS</a>
                    <a href="controleface.html" class="list-group-item" data-parent="#sub-menu">CONTROLADOR DE ACESSO
                        POR BIOMETRIA FACIAL</a>
                    <a href="controladordeacesso.html" class="list-group-item" data-parent="#sub-menu">CONTROLADOR DE
                        ACESSO</a>
                </div>

                <a href="#sub-menu1" class=" sidebar-header list-group-item active" data-toggle="collapse" data-parent="#main-menu">RELÓGIOS
                    DE PONTO<span class="caret"></span></a>
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
            <div class="card-group"></div>
            <div class="col-12 md-3">
                <hr>
            </div>
            
                <div class = "row" >
                @foreach($produtos as $p)
                
                <div class="card" style="width: 15em; word-wrap: break-word; margin: 5px">
                    <br>
                    <img class="img-responsive card-img-top" style="width: 55%;" src="../public/imagens/{{$p->imagem}}" alt="../public/imagens/{{$p->imagem}}">
                    <div class="card-body">

                        <a href="{{route('catraca')}}">
                            <h6 class="card-title text-dark my-3 ">{{$p->nome}}</h6>
                        </a>
                        <p class="distancia card-subtitle mb-2 text-muted my-3">A vista:</p>
                        <h5 class=" distancia card-title mb-2 text-muted my-3">{{$p->valor}}</h5>
                        <p class=" distancia card-subtitle mb-2 text-muted my-3">10x de R$113,55 sem juros</p>
                    </div>

                    <div class="card-footer cor1">
                        <small class="text-muted">
                            <center><a class="text-light" href="">ADICIONAR AO CARRINHO</a>

                        </small>
                    </div>
                </div>
                @endforeach           
                </div>
            </div>
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
            <h5>Produtos Relacionados</h5>
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
                        <br><br><br><br>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
