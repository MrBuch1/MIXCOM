<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MIXCOM Relógios de Ponto - Feira de Santana - Bahia</title>
    <link href="{{ asset('http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext')}}" rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.2.0/css/all.css')}}" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesProdutos.css') }}" rel="stylesheet">
    <link rel="#" href="{{ asset('imagens/logo.png')}}">



</head>

<body>
    <!--Barra de navegação-->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="{{route('index')}}">
                <img class="img-responsive" src="{{asset('imagens/logo.png')}}" width="150px" class="img-responsive"
                    alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra-navegacao"
                aria-controls="barra-navegacao" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="barra-navegacao">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Produtos">A Empresa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle">Produtos</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item dropdown-submenu dropright">
                                <a href="#" data-toggle="dropdown" class="text-dark dropdown-toggle">CONTROLE DE ACESSO</a>
                                <ul class="dropdown-menu">
                                    <li class="text-dark dropdown-item">
                                        <a class="text-dark" href="{{route('produtoCatraca')}}">CATRACAS</a>
                                    </li>
                                    <li class="text-dark dropdown-item">
                                        <a class="text-dark" href="#">CONTROLADOR DE ACESSO POR BIOMETRIA FACIAL</a>
                                    </li>
                                    <li class="text-dark dropdown-item">
                                        <a class="text-dark" href="#">CONTROLADOR DE ACESSO</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-item dropdown-submenu dropright">
                                <a href="#" data-toggle="dropdown" class="text-dark dropdown-toggle">RELÓGIOS DE PONTO</a>
                                <ul class="dropdown-menu">
                                    <li class="text-dark dropdown-item">
                                        <a href="#">REGISTRADOR ELETRÓNICO DE PONTO(REP)</a>
                                    </li>
                                    <li class="text-dark dropdown-item">
                                        <a href="#">CARTOGRAFICO</a>
                                    </li>
                                    <li class="text-dark dropdown-item">
                                        <a href="#">ESTACIONAMENTO</a>
                                    </li>
                                </ul>

                            </li>
                            <li class="dropdown-item dropdown-submenu dropright">
                                <a href="#" data-toggle="dropdown" class="text-dark dropdown-toggle">SOFTWARES</a>
                                <ul class="dropdown-menu">
                                    <li class="text-dark dropdown-item">
                                        <a href="#">CONTROLE DE PONTO</a>
                                    </li>
                                    <li class="text-dark dropdown-item">
                                        <a href="#">CONTROLE DE ACESSO</a>
                                    </li>
                                </ul>

                            </li>
                            <li class="dropdown-item dropdown-submenu dropright">
                                <a href="#" data-toggle="dropdown" class="text-dark dropdown-toggle">ACESSÓRIOS</a>
                                <ul class="dropdown-menu">
                                    <li class="text-dark dropdown-item">
                                        <a href="#">BOBINAS TÉRIMCAS PARA REP</a>
                                    </li>
                                    <li class="text-dark dropdown-item">
                                        <a href="#">CHAPEIRAS</a>
                                    </li>
                                    <li class="text-dark dropdown-item">
                                        <a href="#">CARTÕES 100 UND</a>
                                    </li>
                                    <li class="text-dark dropdown-item">
                                        <a href="#">CRACHÁS</a>
                                    </li>
                                    <li class="text-dark dropdown-item">
                                        <a href="#">FITAS</a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#Sobre-nos">Nossos Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Sobre-nos">Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Fale-conosco">Fale conosco</a>
                    </li>
                </ul>
                @guest
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Cadastrar">Cadastrar</a>
                    </li>
                </ul>
                @else
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->rsocial }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                @endguest
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-primary  my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
    </div>
    <!--Fim Barra de navegação-->
    <div>
        @yield('content')
    </div>
    <!--Inicio Rodapé-->
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <hr>
            </div>
            <div class="col-md-4 ml-5">
                <h3 class="title">Localização</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15595.526552345184!2d-38.9544543!3d-12.2562883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1ba858abc569a83!2sMixcom+Controle+de+Ponto+e+Acesso!5e0!3m2!1spt-BR!2sbr!4v1538017256563"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class=" col-sm-4 ml-3">
                <h3>Contatos</h3>
                <div class="list-group text-center">
                    <p class="text-left">Telefone:(75) 3626-8508</p>
                    <p class="text-left">Alex Lira - alexlira.rh@gmail.com</p>
                    <p class="text-left">Lívia Andrade - liviaadm2013@gmail.com</p>
                </div>
            </div>

            <div class="col-sm-3">
                <h3>Social</h3>
                <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                    <a class="btn btn-outline-primary" href="https://www.facebook.com/Mixcompontoeacesso/?timeline_context_item_type=intro_card_work&timeline_context_item_source=100003811757067&fref=tag"><i
                            class="fab fa-facebook"></i> Facebook</a>
                    <a class="btn btn-outline-info" href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    <a class="btn btn-outline-danger" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>

            <div class="col-12 mt-5">
                <blockquote class="blockquote text-center">
                    <a href="#" class="blockquote-footer">&copy; 2018 Desenvolvido pela <cite title="Titulo"> Equipe de
                            PFC
                            - MIXCOM</cite></a>
                </blockquote>

            </div>

        </div>
    </div>
    <!--Fim Rodapé-->
    <!--Inicio modal fale conosco-->
    <div class="modal fade" id="Fale-conosco" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <label for="idEmailLogin">Email</label>
                    <input type="email" name="E-mail" class="form-control my-2" placeholder="nome@exemplo.com">
                    <label for="#">Comentários</label>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Digite aqui seus comentérios."
                            rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-outline-success" type="submit">Enviar</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!--Fim modal fale conosco-->
    <!--Inicio modal login-->
    <!--div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="" for="idEmailLogin">Email</label>
                            <input type="email" class="form-control" id="idEmailLogin" aria-describedby="emailHelp"
                                placeholder="nome@exemplo.com">
                        </div>
                        <div class="form-group">
                            <label for="idSenhaLogin">Senha</label>
                            <input type="password" class="form-control" id="idSenhaLogin" placeholder="Digite sua Senha">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="idLogin">
                            <label class="form-check-label" for="idLogin">Manter conectado</label>
                        </div>
                        <button type="button" class="btn btn-outline-success" type="submit">Entrar</button>
                        <div class="modal-footer my-4">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div-->
    <!--Fim modal login-->
    <!--Inicio modal Cadastro-->
    <div class="modal fade" id="Cadastrar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <h3 class="display-6 text-center">Como deseja se cadastrar?</h3>
                        <div class="row ml-2 my-4">
                            <div class="ml-5">
                                <a href="{{route('CadastroFis')}}" class="btn btn-outline-primary">Pessoa Fisica</a>
                            </div>
                        </div>

                        <div class="container text-center">
                            <hr>
                            <blockquote class="blockquote text-center">Ou</blockquote>
                            <hr>
                        </div>

                        <div class="row ml-1 my-4">
                            <div class="ml-5">
                                <a href="{{route('telaCadastroJur')}}" class="btn btn-outline-primary">Pessoa Juridica</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fim modal Cadastro-->
    <script src="{{ URL::to('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('js/produtos.js') }}" type="text/javascript"></script>
</body>

</html>
