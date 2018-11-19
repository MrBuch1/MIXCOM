@extends('layouts.app')
@section('content')

<!--Inicio Form-->
<div class="container">
<<<<<<< HEAD
    <div class="row">
        <div class="col-12 text-center my-4">
            <h1 class="display-4 my-5"> {{ __('Cadastre-se')}}</h1>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form method="POST" action="{{ route('telaCadastroJur') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input id="name" type="text" placeholder="Nome completo" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-6">
                        <input id="rsocial" type="text" placeholder="Razão Social" class="form-control{{ $errors->has('rsocial') ? ' is-invalid' : '' }}"
                            name="rsocial" value="{{ old('rsocial') }}" required autofocus>

                        @if ($errors->has('rsocial'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('rsocial') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
=======
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastre-se') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cadastrojur') }}">
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
>>>>>>> master

                <div class="form-row">
                    <div class="form-group col-sm-7">
                        <input id="cnpj" type="text" placeholder="CNPJ" class="form-control{{ $errors->has('cnpj') ? ' is-invalid' : '' }}"
                            name="cnpj" value="{{ old('cnpj') }}" required autofocus>

                        @if ($errors->has('cnpj'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cnpj') }}</strong>
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
                    <a href="{{route('index')}}" class="btn btn-outline-danger mr-2">{{ __('Voltar')}}</a>
                    <button type="submit" class="btn btn-outline-primary mr-2">{{ __('Cadastrar')}}</button>
                </div>


            </form>
        </div>
    </div>
</div>
<!--Fim Form-->
@endsection
