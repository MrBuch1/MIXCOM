@extends('layouts.app')
@section('content')

<!--Inicio Form-->
<div class="container">
    <div class="row">
        <div class="col-12 text-center my-4">
            <h1 class="display-4 my-5"> {{ __('Edite seu perfil')}}</h1>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form method="POST" action="/telaCadastroJur/{{$usuario->id}}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label>Nome:</label>
                        <input id="name" type="text" placeholder="{{$userjur->nome}}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Razão Social:</label>
                        <input id="rsocial" type="text" placeholder="{{$userjur->rsocial}}" class="form-control{{ $errors->has('rsocial') ? ' is-invalid' : '' }}"
                            name="rsocial" value="{{ old('rsocial') }}" required autofocus>

                        @if ($errors->has('rsocial'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('rsocial') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-7">
                        <label>CNPJ:</label>
                        <input id="cnpj" type="text" placeholder="{{$userjur->cnpj}}" class="form-control{{ $errors->has('cnpj') ? ' is-invalid' : '' }}"
                            name="cnpj" value="{{ old('cnpj') }}" required autofocus>

                        @if ($errors->has('cnpj'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cnpj') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-5">
                        <label>Telefone com o DDD:</label>
                        <input id="telefone" type="text" placeholder="{{$userjur->telefone}}" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}"
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
                        <label>Email:</label>
                        <input id="email" type="email" placeholder="{{$userjur->email}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-grup col-sm-6">
                        <label>Confirme o Email:</label>
                        <input id="email2" type="email2" placeholder=" " class="form-control{{ $errors->has('email2') ? ' is-invalid' : '' }}"
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
                    <label>Senha:</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            name="password" required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Repetir Senha:</label>
                        <input id="password-confirm" type="password" class="form-control"
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
                    <button type="submit" class="btn btn-outline-primary mr-2">{{ __('Salvar')}}</button>
                </div>


            </form>
        </div>
    </div>
</div>
<!--Fim Form-->
@endsection
