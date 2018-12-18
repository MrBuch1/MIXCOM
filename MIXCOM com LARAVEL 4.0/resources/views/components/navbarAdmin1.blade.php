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
                        {{ Auth::user()->name }} <span class="caret"></span></a>
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
                    <li @if($current == "categorias") class = "active" @endif>
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
                    <li @if($current == "produtos") class = "active" @endif >
                        <a href="#produtosSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Produtos</a>
                        <ul class="collapse list-unstyled" id="produtosSubmenu">
                            <li>
                                <a href="/produtos/novo">Novo</a>
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
                                <a href="/pedidos">Listar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Page Content  -->
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
