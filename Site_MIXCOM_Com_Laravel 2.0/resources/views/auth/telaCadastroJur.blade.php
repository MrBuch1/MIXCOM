@extends('layouts.layouts')

@section('conteudo')
<!-- Inicio Navbar -->
<div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style=" background-color: #e3f2fd; ">
            <a class="navbar-brand" href="#">
                <img class="img-responsive" src="imagens/logo.png" width="150px" class="img-responsive" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra-navegacao"
                aria-controls="barra-navegacao" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="barra-navegacao">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#Inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Produtos">A Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Sobre-nos">Linha de Produtos</a>
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

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Cadastrar">Cadastrar</a>
                    </li>
                    <!--      <form class="form-inline my-5 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form> -->
                </ul>

            </div>
        </nav>
    </div>
    <!-- Fim Navbar -->



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastre-se') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rsocial" class="col-md-4 col-form-label text-md-right">{{ __('Razão Social') }}</label>

                            <div class="col-md-6">
                                <input id="rsocial" type="text" class="form-control{{ $errors->has('rsocial') ? ' is-invalid' : '' }}" name="rsocial" value="{{ old('rsocial') }}" required autofocus>

                                @if ($errors->has('rsocial'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rsocial') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cnpj" class="col-md-4 col-form-label text-md-right">{{ __('CNPJ') }}</label>

                            <div class="col-md-6">
                                <input id="cnpj" type="text" class="form-control{{ $errors->has('cnpj') ? ' is-invalid' : '' }}" name="cnpj" value="{{ old('cnpj') }}" required autofocus>

                                @if ($errors->has('cnpj'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cnpj') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme a senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="row-md-6 offset-md-6">
                                <button type="button" class="btn btn-danger">
                                    {{ __('Cancelar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
    <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                        <button type="button" class="btn btn-outline-primary" type="submit">Entrar</button>
                        <div class="modal-footer my-4">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                                <a href="telaCadastroFis.html" class="btn btn-outline-primary">Pessoa Fisica</a>
                            </div>
                        </div>

                        <div class="container text-center">
                            <hr>
                            <blockquote class="blockquote text-center">Ou</blockquote>
                            <hr>
                        </div>

                        <div class="row ml-1 my-4">
                            <div class="ml-5">
                                <a href="{{ route('register') }}" class="btn btn-outline-primary">Pessoa Juridica</a>
                            </div>
                            <div class="modal-footer my-4">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fim modal Cadastro-->
</div>
@endsection
