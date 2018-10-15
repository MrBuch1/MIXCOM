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
                <form>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <input type="text" class="form-control" id="inputNomeEmpresa" placeholder="Razão social">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-7">
                            <input type="text" class="form-control" id="inputCNPJ" placeholder="CNPJ">
                        </div>
                        <div class="form-group col-sm-5">
                            <input type="text" class="form-control" id="inputTel" placeholder="Telefone com o DD">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                        <div class="form-grup col-sm-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Confirme o seu Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <input type="password" class="form-control" id="inputSenha" placeholder="Senha">
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="password" class="form-control" id="inputSenha2" placeholder="Repetir Senha">
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
                        <a href="{{route('index')}}" class="btn btn-outline-primary mr-2">Voltar</a>
                        <a href="#" class="btn btn-outline-success mr-2">Cadastrar</a>
                    </div>


                </form>
            </div>
        </div>
    </div>
    <!--Fim Form-->
@endsection