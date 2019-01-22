@extends('layouts.app')
@section('pagina_conteudo')

@component('components.carousel') @endcomponent


<!--Produtos-->
<div class="container">
    <h1 class="display-3 text-center my-5">Mais Vendidos 😉</h1>
    <div class="card-deck">
        
        <div class="card">
            <img class="img-responsive card-img-top" style="width:295px" src="{{ asset('imagens\Produtos/Evo.jpg')}}" alt="">
            <div class="card-body">
                <h5 class="card-title">MD REP EVO</h5>
                <p class="card-subtitle text-muted my-3">Madis MD REP REVO é o relógio perfeito para quem quer a segurança dos dados
                    de registro dos funcionários. Além disso, possui sistema próprio em nuvem para tratamento de pontos.
                </p>
                <!-- <a href="#" class="btn btn-outline-primary">Comprar R$ 2.500,00</a> -->
            </div>
            <div class="card-footer">
                <small class="text-muted">Relógio top</small>
            </div>
        </div>
        <div class="card">
            <img class="img-responsive card-img-top my-3" style="width:300px" src="{{ asset('imagens\Produtos/inner.png')}}" alt="">
            <div class="card-body">
                <h5 class="card-title">Inner Rep Plus</h5>
                <p class="card-subtitle mb-2 text-muted my-3">Uma das melhores marcas no mercado, a TopData lançou
                    seu mais novo equipamento: Inner Rep Plus, com módulo biomérico com agilidade de gravação e registro de ponto.
                </output></p>
                <!-- <a href="#" class="btn btn-outline-primary">Comprar R$ 2.500,00</a> -->
            </div>
            <div class="card-footer">
                <small class="text-muted">A melhor biometria</small>
            </div>
        </div>
        <div class="card">
            <img class="img-responsive card-img-top my-auto" style="width:222px; align-self: center" src="{{ asset('imagens\Produtos/ipointline.png')}}" alt="">
            <div class="card-body">
                <h5 class="card-title">iPointline</h5>
                <p class="card-subtitle mb-2 text-muted my-3">A RW Tech vem sempre inovando em seus aparelhos.
                    O iPointline possui certificado INMETRO e oferece um sistema próprio de tratamento de pontos integrado
                    em nuvem.
                </p>
                <!-- <a href="#" class="btn btn-outline-primary">Comprar R$ 2.500,00</a> -->
            </div>
            <div class="card-footer">
                <small class="text-muted">Topissimo</small>
            </div>
        </div>
    </div>
</div>
<div align="center" class="container">
    <a href="produtos" class="btn btn-outline-primary my-4">Mais produtos</a>
</div>

<!--Fim Produtos-->

<div class="container">
    <div class="col-12 mb-3">
        <hr>
    </div>
    <h1 class="display-3 text-center my-5">Seja Bem Vindo(a)!</h1>
    <p class="text-center lead">Apresentamos o nosso site. Totalmente interativo, moderno e de fácil navegação.
        Tem
        como
        objetivo mostrar a diversidade
        dos produtos e serviços oferecidos, nele, você também poderá solicitar orçamentos on-line. Sem dúvida é
        um
        canal que nos aproxima dos nossos atuais e futuros clientes. Aproveite. </p>

    </p>
</div>
<div class="container">
    <div class="col-12 mb-3">
        <hr>
    </div>
    <h1 class="display-3 text-center my-5">A empresa MIXCOM</h1>
    <p class="text-center lead">A Mixcom é uma empresa voltada para soluções de Ponto e Acesso, além de Softwares,
        somos Assistência
        Técnica Especializada e oferecemos Manutenção de Equipamentos, objetivando entender para atender
        a necessidade dos nossos clientes/parceiros através da venda consultiva, atuando com excelência
        e qualidade na prestação do serviço, conquistando assim, a satisfação dos seus clientes com dedicação
        e comprometimento.
    </p>
</div>
<div class="scrollup ">
    <a href="# ">
        <i class="icon-up-open"></i>
    </a>
</div>
@endsection
