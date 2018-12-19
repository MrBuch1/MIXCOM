<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content = "{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext')}}" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.2.0/css/all.css')}}" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel = "stylesheet">
    <link href="{{asset('css/side-bar.css')}}" rel = "stylesheet">
    <title>MIXCOM - Administrador</title>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="/admin">MIXCOM</a></h3>
            </div>
            <ul class="list-unstyled components">
                <li @if($current == "index") class = "active" @endif>
                    <a href="/admin">Página Inicial</a>
                </li>
                <li @if($current == "user") class = "active" @endif >
                    <a href="#user"  data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        Usuário - Administrador<span class="caret"></span></a>
                        <ul class="collapse list-unstyled" id="user">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!--  <li @if($current == "categorias") class = "active" @endif>
                        <a href="#categoriasSubmenu"  data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Categorias</a>
                        <ul class="collapse list-unstyled" id="categoriasSubmenu">
                            <li>
                                <a href="/categorias/nova">Nova</a>
                            </li>
                            <li>
                                <a href="/categorias/">Listar</a>
                            </li>
                            <li>
                                <a href="/categorias/restaurar">Restaurar</a>
                            </li>
                        </ul>
                    </li> -->
                    <li @if($current == "produtos") class = "active" @endif >
                        <a href="#produtosSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Produtos</a>
                        <ul class="collapse list-unstyled" id="produtosSubmenu">
                            <li>
                                <a href="{{ route('novo.produto') }}">Novo +</a>
                            </li>
                            <li>
                                <a href="{{ route('produtos.listar') }}">Listar</a>
                            </li>
                        </ul>
                    </li>
                    <li @if($current == "pedidos") class = "active" @endif >
                        <a href="#clientesSubmenu"  data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Pedidos</a>
                        <ul class="collapse list-unstyled" id="clientesSubmenu">
                            <li>
                                <a href="{{ route("pedidos") }}">Listar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- Page Content  -->
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn"  style="background-color:#2E64FE;">
                            <i class="fas fa-align-left" ></i>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>
                    </div>
                </nav>
                @hasSection('body')
                @yield('body')
                @endif
            </div>
        </div>
        <script src="{{asset('js/app.js')}}" type = "text/javascript"></script>
        <script src="{{asset('js/side-bar.js')}}" type = "text/javascript"></script>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    </body>
    </html>
