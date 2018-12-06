@extends('layouts.app')
@section('pagina_conteudo')

<br><br><br>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="container">
    <div class="row">
    <div class="caixa col-md-9 col-sm-9 col-xs-9">

            <br><br>
            <h2>Carrinho</h2>
            @forelse ($pedidos as $pedido)
            <h2 style="margin-left: 190px; margin-top: -45px"> Pedido: {{ $pedido->id }} </h2>
            <h2 style="margin-left: 400px; margin-top: -45px"> Criado em: {{ $pedido->created_at->format('d/m/Y H:i') }} </h2>
            @php
            $total_pedido = 0;
            @endphp
            @foreach ($pedido->pedido_produtos as $pedido_produto)
        <div class="card-deck ">
            <br><br><br><br>
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="caixa col-md-2 col-sm-2 col-xs-2">
                                <img class="img-responsive card-img-top" src="{{ $pedido_produto->produto->imagem }}" >
                                <br>
                                <br>

                                <a href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 0" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Retirar produto do carrinho?">Excluir</a>
                            </div>
                            <div class="caixa col-md-4 col-sm-4 col-xs-4">
                                <a href="Catraca5905.html"><h5 class="card-title text-muted my-3">{{ $pedido_produto->produto->nome }}</h5></a>
                                <p class="distancia card-subtitle mb-2 text-muted my-3">Vendido e entregue pela MixCom</p>

                            </div>
                            <div class="caixa col-md-2 col-sm-2 col-xs-2">
                                <table>
                                    <tr>
                                        <td>
                                            <h5 class="text-muted">Quantidade</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 1 )">
                                                <i class="material-icons small">remove_circle_outline</i>
                                            </a>
                                            <span class="col "> {{ $pedido_produto->qtd }} </span>
                                            <a href="#" onclick="carrinhoAdicionarProduto({{ $pedido_produto->produto_id }})">
                                                <i class="material-icons small">add_circle_outline</i>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="caixa col-md-2 col-sm-2 col-xs-2">
                                <table>
                                    <tr>
                                        <td>
                                            <h5 class="text-muted ">Preço</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p  class="text-muted">{{ number_format($pedido_produto->produto->valor, 2, ',', '.') }}</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="caixa col-md-2 col-sm-2 col-xs-2">
                                <table>
                                    <tr>
                                        <td>
                                            <h5 class="text-muted">Endereço</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p  class="text-muted">Endereço Principal</p>
                                            <a href="#">Alterar</a>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
             </div>
             @endforeach
         </div>
         <br>
        <table>
                                    <tr>
                                      <td>

                                        <form class="form-inline my-5 my-lg-0">
                                            <p class="distancia3">Calcule frete </p>
                                        <input class="form-control mr-sm-2 " type="search" placeholder="_______-___" aria-label="Pesquisar">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">OK</button>
                                        </form>
                                      </td>
                                    </tr>
                                </table>
    </div>
    <div class="caixa col-md-3 col-sm-3 col-xs-3">
        <br>
        <br>


       <div class="card-deck distancia5">
            <div class="card">
                <br>
                <h4 class="distancia4 ">Resumo da Compra</h5>
                <br>
                <h3 class="distancia4 card-subtitle mb-2 text-muted my-3">Subtotal </h3>
                <p class="distancia4 card-subtitle mb-2 text-muted my-3">Quantidade de produtos: {{ $pedido_produto->qtd }}</p>
                <p class="distancia4 card-subtitle mb-2 text-muted my-3">{{ number_format($pedido_produto->produto->valor, 2, ',', '.') }}</p>
                <p class="distancia4 card-subtitle mb-2 text-muted my-3">Frete</p>
                <p class="distancia4 card-subtitle mb-2 text-muted my-3">R$0,00</p>



                <div class="col-02 mb-1">
            <hr>
        </div>
                <div class="card-body">
                    <h5 class=" text-dark">Total</h5>
                    @php
                    $total_produto = $pedido_produto->valores - $pedido_produto->descontos;
                    $total_pedido += $total_produto;
                @endphp
                    <h5 class=" distancia card-title mb-2 text-muted my-3">{{ number_format($total_produto, 2, ',', '.') }}</h5>
                     <p class=" distancia card-subtitle mb-2 text-muted my-3">10x de R$113,55 sem juros</p>
                </div>
                <div class="card-footer btn">
                      <center><table>
                        <tr>
                            <td>
                            <a href="finalizarCompra.html"> <input type="button" class="btn btn-outline-info botao2" value="Continuar">
                            </a>
                            </td>
                        </tr>

                    </table></center>
                </div>
                </div>
            </div>
    </div>
</div>
@empty
<h5>Não há nenhum pedido no carrinho</h5>
@endforelse
</div>


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
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    @stack('scripts')
<script type="text/javascript">
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $('select').material_select();
    });
</script>
@endsection
