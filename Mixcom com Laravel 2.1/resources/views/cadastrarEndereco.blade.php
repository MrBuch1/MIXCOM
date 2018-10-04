@extends('layouts.app')
@section('content')

<!--Inicio Form-->
<div class="container">
    <div class="row">
        <div class="col-12 text-center my-4">
            <h1 class="display-4 my-5"> {{ __('Endereço')}}</h1>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-5">
                        <input id="rua" type="text" placeholder="Rua" class="form-control{{ $errors->has('rua') ? ' is-invalid' : '' }}"
                            name="rua" value="{{ old('rua') }}" required autofocus>

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-2">
                        <input id="num" type="text" placeholder="Nº" class="form-control{{ $errors->has('num') ? ' is-invalid' : '' }}"
                            name="num" value="{{ old('num') }}" required autofocus>

                        @if ($errors->has('num'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('num') }}</strong>
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
                    <div class="form-group col-sm-3">
                        <input id="bairro" type="text" placeholder="Bairro" class="form-control{{ $errors->has('bairro') ? ' is-invalid' : '' }}"
                            name="bairro" value="{{ old('bairro') }}" required autofocus>

                        @if ($errors->has('bairro'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('bairro') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-4">
                        <input id="cidade" type="text" placeholder="Cidade" class="form-control{{ $errors->has('cidade') ? ' is-invalid' : '' }}"
                            name="cidade" value="{{ old('cidade') }}" required autofocus>

                        @if ($errors->has('cidade'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cidade') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-2">
                        <select id="estado" type="text" placeholder="estado" class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}"
                            name="estado" value="{{ old('estado') }}" required autofocus></select>

                        @if ($errors->has('estado'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('estado') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group mr-auto ml-2"></div>
                    <a href="{{route('index')}}" class="btn btn-outline-danger mr-2">{{ __('Voltar')}}</a>
                    <button type="submit" class="btn btn-outline-primary mr-2">{{ __('Cadastrar')}}</button>
                </div>


            </form>
        </div>
    </div>
</div>
<!--Fim Form-->
@endsection
