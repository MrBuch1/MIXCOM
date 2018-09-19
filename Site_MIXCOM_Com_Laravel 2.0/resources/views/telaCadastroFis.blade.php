@extends('layouts.app')
@section('content') 
    <!--Inicio Form-->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-3">
                <h1 class="display-4 my-5">{{ __('Cadastre-se') }}</h1>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <input placeholder="Nome" id="nome" type="text" 
                            class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome') }}" required autofocus>
                        @if ($errors->has('nome') || ('sobrenome'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group col-sm-6">
                            <input placeholder="Sobrenome" id="sobrenome" type="text" 
                            class="form-control{{ $errors->has('sobrenome') ? ' is-invalid' : '' }}" name="sobrenome" value="{{ old('sobrenome') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <input id="inputCPF" placeholder="CPF" type="text" 
                            class="form-control {{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required autofocus>
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="date" id="inputData_nasc"
                            class="form-control{{ $errors->has('data') ? ' is-invalid' : '' }}" name="data" value="{{ old('data') }}" required autofocus>
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" id="inputTel" placeholder="Telefone com o DD"
                            class="form-control{{ $errors->has('numero') ? ' is-invalid' : '' }}" name="numero" value="{{ old('numero') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <input type="text" id="inputEmail" placeholder="Email"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('inputEmail'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-grup col-sm-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Confirme o seu Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <input type="password" id="inputSenha" placeholder="Senha"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required>

                        @if ($errors->has('inputSenha'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="password" id="inputSenha2" placeholder="Repetir Senha"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group mr-auto">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Desejo receber novidades por
                                    e-mail
                                </label>
                            </div>
                        </div>
                        <a href="{{route('index')}}" class="btn btn-outline-primary mr-2">{{('Voltar')}}</a>
                        <a href="#" class="btn btn-outline-success mr-2"> {{ __('cadastrar') }}</a>
                    </div>


                </form>
            </div>
        </div>
    </div>
    <!--Fim Form-->
@endsection