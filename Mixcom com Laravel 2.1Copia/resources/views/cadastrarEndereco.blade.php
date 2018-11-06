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
            <form method="POST" action="{{ route('end') }}">
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
                            name="estado" value="{{ old('estado') }}" required autofocus>
                            <option value=""> Estado </option>
                            <option value="acre"> AC </option>
                            <option value="alagoas"> AL </option>
                            <option value="amapá"> AP </option>
                            <option value="amazonas"> AM </option>
                            <option value="bahia"> BA </option>
                            <option value="ceará"> CE </option>
                            <option value="distrito federal"> DF </option>
                            <option value="espirito santo"> ES </option>
                            <option value="goiás"> GO </option>
                            <option value="maranhão"> MA </option>
                            <option value="mato grosso"> MT </option>
                            <option value="mato grosso do sul"> MS </option>
                            <option value="minas gerais"> MG </option>
                            <option value="pará"> PA </option>
                            <option value="paraiba"> PB </option>
                            <option value="paraná"> PR </option>
                            <option value="pernambuco"> PE </option>
                            <option value="piauí"> PI </option>
                            <option value="rio de janeiro"> RJ </option>
                            <option value="rio grande do norte"> RN </option>
                            <option value="rio grande do sul"> RS </option>
                            <option value="rondonia"> RO </option>
                            <option value="roraima"> RR </option>
                            <option value="santa catarina"> SC </option>
                            <option value="são paulo"> SP </option>
                            <option value="sergipe"> SE </option>
                            <option value="tocantins"> TO </option>
                            </select>

                        @if ($errors->has('cidade'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cidade') }}</strong>
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
