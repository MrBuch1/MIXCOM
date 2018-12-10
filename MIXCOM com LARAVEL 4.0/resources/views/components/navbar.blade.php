<!--Barra de navegação-->
<div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="/">
            <img class="img-responsive" src="{{asset('imagens/logo.png')}}" width="150px" class="img-responsive"
            alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra-navegacao"
            aria-controls="barra-navegacao" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="barra-navegacao">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Produtos">A Empresa</a>
                </li>
                <li class="nav-item">
                    <a href="/produtos" id="produtos" class="nav-link">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Sobre-nos">Nossos Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Sobre-nos">Cliente</a>
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
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Sair') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('carrinho.index') }}">
                        {{ __('Carrinho') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('carrinho.compras') }}">
                        {{ __('Minhas Compras') }}
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
