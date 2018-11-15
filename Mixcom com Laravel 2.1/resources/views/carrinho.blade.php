@extends('layouts.app')
@section('content')

<br><br><br>


<div class="container">
    <div class="row">
    <div class="caixa col-md-9 col-sm-9 col-xs-9">
        
            <br><br>
            <h4>Carrinho</h4>

        <div class="card-deck ">
                    
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="caixa col-md-2 col-sm-2 col-xs-2">
                                <img class="img-responsive card-img-top" src="imagens\imagensRedimencionadas/catraca1R.png" alt="">
                                <br>
                                <br>

                                <a href="#">Excluir</a>
                            </div>
                            <div class="caixa col-md-4 col-sm-4 col-xs-4">
                                <a href="Catraca5905.html"><h5 class="card-title text-muted my-3">Catraca de Inox RBC 5905</h5></a>
                                <p class="distancia card-subtitle mb-2 text-muted my-3">Vendido e entre por MixCom.com</p>
                              
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
                                            <input class="tamanhoQuantidade" type="number" max="100" step="1" placeholder="1">
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
                                            <p  class="text-muted">R$999,00</p>
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

         </div>
         <br>
        <table>
                                    <tr>
                                    <td>
                                        <p>Calcule frete e prazo </p>
                                        <form action="" method="post" class="form-inline my-5 my-lg-0">

                                            <input class="form-control mr-sm-2" type="search" placeholder="_______-___" id="cep_destino" aria-label="Pesquisar">
                                                <a onclick="calcular();" class="btn btn-outline-primary my-2 my-sm-0">OK</a>

                                            <a style="padding:10px" href="http://www.buscacep.correios.com.br/sistemas/buscacep/">Não sei meu cep</a>

                                        </form>
                                    </td>
                                    <tr>
                                        <td>
                                            <div id="retorno">
                                                @if(isset($valor) && isset($prazo))
                                                    <p>Valor: R$ {{$valor}}
                                                    Prazo: {{$prazo}} Dias</p>
                                                @endif

                                            </div>
                                        </td>
                                    </tr>
                                </tr>

                                </table>
    </div>
    <div class="caixa col-md-3 col-sm-3 col-xs-3">
        <br>
        <br>
        
        
       <div class="card-deck distancia5">
            <div class="card">
                <br>
                <h5 class="distancia4 ">Resumo da Compra</h5>
                <br>
                <p class="distancia4 card-subtitle mb-2 text-muted my-3">Subtotal (1 produto) </p>
                <p class="distancia4 card-subtitle mb-2 text-muted my-3">R$999,00</p>
                <p class="distancia4 card-subtitle mb-2 text-muted my-3">Frete</p>
                <p class="distancia4 card-subtitle mb-2 text-muted my-3">R$0,00</p>
                


                <div class="col-02 mb-1">
            <hr>
        </div>
                <div class="card-body">
                    <h5 class=" text-dark">Total</h5>
                    <h5 class=" distancia card-title mb-2 text-muted my-3">R$999,00</h5>
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
<script src="html://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    function calcular(){
        var cep_destino = $("#cep_destino").val();

        var link = "/calcula/" + cep_destino;  
        window.location.replace(link);

        
    }
</script>

@endsection
