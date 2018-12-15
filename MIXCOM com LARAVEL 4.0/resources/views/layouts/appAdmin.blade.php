<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MIXCOM Relógios de Ponto - Feira de Santana - Bahia</title>
    <link href="{{ asset('http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext')}}" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.2.0/css/all.css')}}" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/side-bar.css')}}" rel = "stylesheet">
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>MIXCOM - ADM</h3>
        </div>

        <ul class="list-unstyled components">
            <li class = "active" >
                <a href="/">Página Inicial</a>
            </li>
            <li class = "active" >
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
            </li>
            <li  class = "active" >
                <a href="#produtosSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Produtos</a>
                <ul class="collapse list-unstyled" id="produtosSubmenu">
                    <li>
                        <a href="/produtos/novo">Novo</a>
                    </li>
                    <li>
                        <a href="/produtos/">Listar</a>
                    </li>
                </ul>
            </li>
            <li class = "active" >
                <a href="#clientesSubmenu"  data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Clientes</a>
                <ul class="collapse list-unstyled" id="clientesSubmenu">
                    <li>
                        <a href="/clientes/novo">Nova</a>
                    </li>
                    <li>
                        <a href="/clientes">Listar</a>
                    </li>
                    <li>

                </li>
            </ul>
        </li>
    </ul>

</nav>
<div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <!--
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                    -->
                </div>
            </nav>

            @hasSection('pagina_conteudo')
                 @yield('pagina_conteudo')
            @endif
        </div>
    </div>
    <script src="{{asset('js/side-bar.js')}}" type = "text/javascript"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{ URL::to('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
