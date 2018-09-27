@extends('layouts.app')
@section('content') 

    <!--Inicio Form-->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-4">
                <h1 class="display-4 my-5"> Cadastre-se</h1>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <input id="inputNomeEmpresa" placeholder="Razão social" type="text" class="form-control{{ $errors->has('inputNomeEmpresa') ? ' is-invalid' : '' }}" name="inputNomeEmpresa" value="{{ old('inputNomeEmpresa') }}" required autofocus>
                            
                            @if ($errors->has('inputNomeEmpresa'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('inputNomeEmpresa') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                            <div class="form-group col-sm-7">
                                <input id="name" type="text"  placeholder="Nome Completo" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-sm-5">
                                    <input id="cnpj" type="text" placeholder="CNPJ" class="form-control{{ $errors->has('cnpj') ? ' is-invalid' : '' }}" name="cnpj" value="{{ old('cnpj') }}" required autofocus>
                                    
                                    @if ($errors->has('cnpj'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cnpj') }}</strong>
                                    </span>
                                @endif
                                </div>
                        </div>

                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <input id="telefone" type="text" placeholder="Telefone com o DD" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="cnpj" value="{{ old('telefone') }}" required autofocus>
                            
                            @if ($errors->has('telefone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('telefone') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-sm-6">
                                <input id="telefone2" type="text" class="form-control" placeholder="Telefone secundário com o DD">
                            </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <input id="email" type="text" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="cnpj" value="{{ old('email') }}" required autofocus>
                            
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-grup col-sm-6">
                            <input id="email2" type="text"  placeholder="Confirme o seu Email" class="form-control{{ $errors->has('email2') ? ' is-invalid' : '' }}" name="cnpj" value="{{ old('email2') }}" required autofocus>
                            
                            @if ($errors->has('email2'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email2') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <input id="password"  placeholder="Senha" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                           
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-sm-6">
                            <input id="password-confirm" type="password"  placeholder="Repetir Senha" class="form-control"  name="password_confirmation" required>
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
                        <a href="{{route('index')}}" class="btn btn-outline-danger mr-2">Voltar</a>
                        <button type="submit" class="btn btn-outline-primary mr-2">{{ __('Registrar') }}</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
    <!--Fim Form-->
@endsection