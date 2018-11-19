<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#toggle").click(function(){
                $("form").toggle();
            });
        });
        </script>
</head>
<!--Inicio modal Cadastro-->
<div class="modal fade" id="Cadastrar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container">
                    <h3 class="display-6 text-center">Como deseja se cadastrar?</h3>
                    <div class="row my-4">
                        <div class="ml-5">
                            <button id="toggle" class="btn btn-outline-primary">Pessoa Fisica</button>
                                    <form method="POST" action="register">
                                        @csrf
                                        <div class="form-row container">
                                            <div class="form-group ml-auto">
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
                                                <input id="email2" type="email2" placeholder="Confirme o seu Email"
                                                    class="form-control{{ $errors->has('email2') ? ' is-invalid' : '' }}"
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
                                                <input id="password-confirm" placeholder="Repetir Senha" type="password"
                                                    class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>


                                        <div class="form-row">
                                            <div class="form-group mr-auto ml-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"> {{ __('Desejo
                                                        receber novidades por
                                                        e-mail')}}
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-primary mr-2">{{
                                                __('Cadastrar')}}</button>
                                        </div>


                                    </form>
                                </div>
                            </div>

                    <div class="container text-center">
                        <hr>
                        <blockquote class="blockquote text-center">Ou</blockquote>
                        <hr>
                    </div>

                    <div class="row ml-1 my-4">
                        <div class="ml-5">
                            <button id="toggle" class="btn btn-outline-primary">Pessoa Juridica</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Fim modal Cadastro-->
