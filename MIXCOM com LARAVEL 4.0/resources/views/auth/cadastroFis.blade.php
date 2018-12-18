@extends('layouts.app')
@section('pagina_conteudo')
<br>br>
<!--Inicio Form-->
<div class="container">
    <div class="row">
        <div class="col-12 text-center my-4">
            <h1 class="display-4 my-5"> {{ __('Cadastre-se')}}</h1>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <input id="name" type="text" placeholder="Nome completo" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-7">
                        <input id="cpf" type="text" placeholder="CPF" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}"
                        name="cpf" value="{{ old('cpf') }}" required autofocus>

                        @if ($errors->has('cpf'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cpf') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-5">
                        <input id="telefone" type="text" placeholder="Telefone com o DD" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}"
                        name="telefone" value="{{ old('telefone') }}" required autofocus>

                        @if ($errors->has('telefone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('telefone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-3">
                        <input id="cep" type="text" placeholder="CEP" class="form-control{{ $errors->has('cep') ? ' is-invalid' : '' }}"
                        name="cep" value="{{ old('cep') }}" required autofocus>

                        @if ($errors->has('cep'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cep') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-5">
                        <input id="cidade" type="text" placeholder="Cidade" class="form-control{{ $errors->has('cidade') ? ' is-invalid' : '' }}"
                        name="cidade" value="{{ old('cidade') }}" required autofocus>

                        @if ($errors->has('cidade'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cidade') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-4">
                        <input id="rua" type="text" placeholder="Rua" class="form-control{{ $errors->has('rua') ? ' is-invalid' : '' }}"
                        name="rua" value="{{ old('rua') }}" required autofocus>

                        @if ($errors->has('rua'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('rua') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-1">
                        <input id="numero" type="text" placeholder="Nº" class="form-control{{ $errors->has('numero') ? ' is-invalid' : '' }}"
                        name="numero" value="{{ old('numero') }}" required autofocus>

                        @if ($errors->has('numero'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('numero') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-5">
                        <input id="complemento" type="text" placeholder="Complemento" class="form-control{{ $errors->has('complemento') ? ' is-invalid' : '' }}"
                        name="complemento" value="{{ old('complemento') }}" required autofocus>

                        @if ($errors->has('complemento'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('complemento') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-3">
                        <input id="bairro" type="text" placeholder="Bairro" class="form-control{{ $errors->has('bairro') ? ' is-invalid' : '' }}"
                        name="bairro" value="{{ old('bairro') }}" required autofocus>

                        @if ($errors->has('bairro'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('bairro') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-3">
                        <input id="uf" type="text" placeholder="Estado" class="form-control{{ $errors->has('uf') ? ' is-invalid' : '' }}"
                        name="uf" value="{{ old('uf') }}" required autofocus>

                        @if ($errors->has('uf'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('uf') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-grup col-sm-6">
                        <input id="email2" type="email2" placeholder="Confirme o seu Email" class="form-control{{ $errors->has('email2') ? ' is-invalid' : '' }}"
                        name="email2" value="{{ old('email2') }}" required>

                        @if ($errors->has('email2'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email2') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input id="password" type="password" placeholder="Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password" required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-6">
                        <input id="password-confirm" placeholder="Repetir Senha" type="password" class="form-control"
                        name="password_confirmation" required>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group mr-auto ml-2">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> {{ __('Desejo receber novidades por
                                e-mail')}}
                            </label>
                        </div>
                    </div>
                    <a href="{{route('inicio')}}" class="btn btn-outline-danger mr-2">{{ __('Voltar')}}</a>
                    <button type="submit" class="btn btn-outline-primary mr-2">{{ __('Cadastrar')}}</button>
                </div>


            </form>
        </div>
    </div>
</div>
<!--Fim Form-->
@endsection
