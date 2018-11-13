<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MIXCOM Relógios de Ponto - Feira de Santana - Bahia</title>
    <link href="{{ asset('http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext')}}" rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.2.0/css/all.css')}}" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesProdutos.css') }}" rel="stylesheet">
    <link rel="#" href="{{ asset('imagens/logo.png')}}">
    
    <!-- Cod do Chat -->
    <script type='text/javascript'>
(function(){ var widget_id = 'qCM74wTOwS';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->

</head>

    <body>
        @component('components.component-navbar-principal') @endcomponent
        @yield('content')
    </body>
    <!--Inicio Rodapé-->
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <hr>
            </div>
            <div class="col-md-4 ml-5">
                <h3 class="title">Localização</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15595.526552345184!2d-38.9544543!3d-12.2562883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1ba858abc569a83!2sMixcom+Controle+de+Ponto+e+Acesso!5e0!3m2!1spt-BR!2sbr!4v1538017256563"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class=" col-sm-4 ml-3">
                <h3>Contatos</h3>
                <div class="list-group text-center">
                    <p class="text-left">Telefone:(75) 3626-8508</p>
                    <p class="text-left">Alex Lira - alexlira.rh@gmail.com</p>
                    <p class="text-left">Lívia Andrade - liviaadm2013@gmail.com</p>
                </div>
            </div>

            <div class="col-sm-3">
                <h3>Social</h3>
                <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                    <a class="btn btn-outline-primary" href="https://www.facebook.com/Mixcompontoeacesso/?timeline_context_item_type=intro_card_work&timeline_context_item_source=100003811757067&fref=tag"><i
                            class="fab fa-facebook"></i> Facebook</a>
                    <a class="btn btn-outline-info" href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    <a class="btn btn-outline-danger" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>

            <div class="col-12 mt-5">
                <blockquote class="blockquote text-center">
                    <a href="#" class="blockquote-footer">&copy; 2018 Desenvolvido pela <cite title="Titulo"> Equipe de
                            PFC
                            - MIXCOM</cite></a>
                </blockquote>

            </div>

        </div>
    </div>
    <!--Fim Rodapé-->
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
    @component('components.component-form-cadastroUser') @endcomponent
    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    <script src="{{ URL::to('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('js/produtos.js') }}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</html>
