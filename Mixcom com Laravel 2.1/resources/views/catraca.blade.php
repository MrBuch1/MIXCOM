@extends('layouts.app')
@section('content')
<!--Inicio Corpo-->
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="caixa col-md-3 col-sm-3 col-xs-3">
            <div class="col-12 mb-3">
                <hr>
            </div>

            <div id="main-menu" class=" list-group ">
                <a href="#sub-menu" class=" sidebar-header list-group-item active" data-toggle="collapse" data-parent="#main-menu">CONTROLE
                    DE ACESSOS<span class="caret"></span></a>

                <div class="Estilomenu collapse list-group-level1" id="sub-menu">
                    <a href="produtocatraca.html" class="list-group-item" data-parent="#sub-menu">
                        CATRACAS</a>
                    <a href="controleface.html" class="list-group-item" data-parent="#sub-menu">CONTROLADOR DE ACESSO
                        POR BIOMETRIA FACIAL</a>
                    <a href="controladordeacesso.html" class="list-group-item" data-parent="#sub-menu">CONTROLADOR DE
                        ACESSO</a>
                </div>

                <a href="#sub-menu1" class=" sidebar-header list-group-item active" data-toggle="collapse" data-parent="#main-menu">RELÓGIOS
                    DE PONTOS<span class="caret"></span></a>
                <div class="collapse list-group-level1" id="sub-menu1">
                    <a href="registradoreletro.html" class="list-group-item" data-parent="#sub-menu1">REGISTRADOR
                        ELETRÓNICO DE PONTO(REP)</a>
                    <a href="registradorcartografico.html" class="list-group-item" data-parent="#sub-menu1">CARTOGRAFICO</a>
                    <a href="softsolucoes.html" class="list-group-item" data-parent="#sub-menu1">SOLUÇÕES DE
                        ESTACIONAMENTO</a>
                </div>

                <a href="#sub-menu2" class=" sidebar-header list-group-item active" data-toggle="collapse" data-parent="#main-menu">SOFTWARES<span
                        class="caret"></span></a>
                <div class="collapse list-group-level1" id="sub-menu2">
                    <a href="softcontroledeponto.html" class="list-group-item" data-parent="#sub-menu2">CONTROLE DE
                        PONTO</a>
                    <a href="softcontroledeacesso.html" class="list-group-item" data-parent="#sub-menu2">CONTROLE DE
                        ACESSO</a>
                </div>

                <a href="#sub-menu3" class=" sidebar-header list-group-item active" data-toggle="collapse" data-parent="#main-menu">ACESSORIOS<span
                        class="caret"></span></a>
                <div class="collapse list-group-level1" id="sub-menu3">
                    <a href="#" class="list-group-item" data-parent="#sub-menu3">BOBINAS TÉRIMCAS PARA REP</a>
                    <a href="#" class="list-group-item" data-parent="#sub-menu3">CHAPEIRAS</a>
                    <a href="#" class="list-group-item" data-parent="#sub-menu3">CARTÕES 100 UND</a>
                    <a href="#" class="list-group-item" data-parent="#sub-menu3">CRACHÁS</a>
                    <a href="#" class="list-group-item" data-parent="#sub-menu3">FITA</a>

                </div>
            </div>
        </div>
        <div class="caixa col-md-8 col-sm-8 col-xs-8">
            <div class="col-12 mb-3">
                <hr>
            </div>
            <br>
            <table>
                <tr>
                    <td class="espaco" width="229" valign="top">
                        <p><img src="{{URL::to('imagens\imagensRedimencionadas/catraca1.png')}}"></p>
                    </td>
                    <td width="571" valign="top">
                        <p>
                            <h5><strong>Catraca de Inox RBC 5905 </strong></h5>
                            <p align="justify" class="Estilo2">A Catraca de Inox RBC 5905 é; a melhor opção;o para o
                                controle de acesso de sua empresa. A Catraca RBC 5905 possui eficiente leitura de
                                impressão de digitais.<br>
                            </p>
                            <br>
                            <table class="table  table-bordered table-condensed">
                                <tr>
                                    <td>
                                        <center>
                                            <h3 class=" distancia card-title mb-2 my-3">R$999,00</h3>
                                            <p class=" distancia card-subtitle mb-2 text-muted my-3">10x de R$113,55
                                                sem juros</p>
                                            <input type="button" class=" btn btn-outline-success botao2 " onclick="funcaoComprar()"
                                                value="Comprar">
                                        </center>
                                        <br>
                                        <a href="#">Formas de Pagamento</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Calcule frete e prazo </p>
                                        <form class="form-inline my-5 my-lg-0">

                                            <input class="form-control mr-sm-2" type="search" placeholder="_______-___"
                                                aria-label="Pesquisar">
                                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">OK</button>
                                        </form>
                                    </td>
                                </tr>



                            </table>
                    </td>
                </tr>
            </table>
        </div>
        <div class="caixa col-md-1 col-sm-1 col-xs-1">
            <div class="col-12 mb-3">
                <hr>
            </div>
            <table>
                <tr>

                    <td><a href="#"><img class="img-responsive" src="{{asset ('imagens/carrinho.png')}}" title="Carrinho!"></a></td>

                </tr>

            </table>
        </div>
    </div>

</div>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="caixa col-md-12 col-sm-12 col-xs-12">
            <div class="col-12 mb-3">
                <hr>
            </div>
            <h4 class="text-muted">Aproveite e veja Também</h4>
            <br>
            <div class="container">
                <div class="row blog">
                    <div class="col-md-12">
                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#blogCarousel" data-slide-to="1"></li>
                            </ol>

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->

                            </div>
                            <!--.carousel-inner-->
                        </div>
                        <!--.Carousel-->


                    </div>
                </div>
                <br><br><br>
                <div class="container">
                    <div class="row">
                        <div class="caixa col-md-12 col-sm-12 col-xs-12">
                            <div class="col-12 mb-3">
                                <hr>
                            </div>
                            <p><strong>Caractéristicas</strong></p>
                            <p align="justify" class="Estilo2">
                                • Display LCD com 2 linhas de 20 caracteres cada, proporcionando excelente visualização
                                horária, com sua exclusiva formatação de dígitos. O display possui back-light<br>
                                • Microprocessador 16 bits.<br>
                                • Memória RAM de 512 Kb para listas e registros, protegida por bateria de NiCd com
                                possibilidade de reter as informações por até 2 anos<br>
                                • Relógio calendário não volátil<br>
                                • Bateria de NiMh que possibilita a total operacionalidade do produto por até 6 horas,
                                na falta de energia elétrica<br>
                                • Porta serial opcional para comunicação RS-232, RS-485 ou TCP-IP<br>
                                • Duas entradas para leitores de cartão magnético (padrão ABA) ou proximidade (ABA ou
                                Weigand 26 bit’s)<br>
                                • Duas entradas para leitores de códigos de barras padrão 25 intercalado ou Code 39 (4
                                à 20 dígitos)<br>
                                • Sistema supervisor para proteção dos dados da memória RAM e Watchdog Timer para
                                correção de eventuais problemas de processamento<br>
                                • Alimentação por fonte chaveada Full Range com tensão de entrada de 90 a 240 Vac/50 ou
                                60 Hz<br>
                                • Um leitor Biométrico para verificação de impressões digitais
                            </p>
                            <p><strong>Software Residente:</strong></p>
                            <p align="justify" class="Estilo2">
                                • Controle através de lista de cartões permitidos<br>
                                • Possibilidade de parametrizar o controle, sendo ele apenas por cartão ou por cartão e
                                impressão digital<br>
                                • Bloqueio de marcações fora do horário programado<br>
                                • Controle de horário através de até 255 faixas horárias de 6 intervalos diários,
                                podendo ser combinadas para formar até 255 jornadas semanais, mensais ou periódicas<br>
                                • 40 funções digitadas no teclado para diferenciação de registros, com mensagens ao
                                usuário<br>
                                • 7 mensagens programáveis que podem ser vinculadas aos cartões dos usuários<br>
                                • Programação do texto das mensagens do sistema<br>
                                • 99 toques de sinaleiro programáveis, podendo ser habilitados ou desabilitados para
                                cada dia da semana. Estes toques podem ser internos (buzzer) ou externos (opcional)<br>
                                • Registro de eventos com log de data e hora<br>
                                • Detector de revista com porcentagem de sorteio programável<br>
                                • Até 5 cartões podem ser programados como supervisores, com possibilidade de alterarem
                                parâmetros do relógio pelo teclado<br>
                                • Acerto automático para horário de verão<br>
                                • Função de coleta Backup para recuperação de marcações<br>
                                • O tamanho das listas internas de dados é programável, permitindo a otimização do uso
                                da memória para cada cliente. Para cartões de 6 dígitos e uma lista de 1.000 cartões
                                permitidos, o buffer de coleta pode armazenar até 50.000 registros<br>
                                • Memória com capacidade de armazenamento para 1400 impressões digitais<br>
                                • Possibilidade de cadastro de mais de uma impressão digital por usuário, com
                                reconhecimento automático entre as digitais cadastradas<br>
                            </p>

                            <p><strong>Software de Comunicação:</strong></p>
                            <p align="justify" class="Estilo2">
                                • Programação dos equipamentos e coleta dos dados<br>
                                • Cadastro de funcionários no sistema<br>
                                • Emissão de listagens dos cadastros<br>
                                • Emissão de relatórios de acesso<br>
                                • Importação e exportação de dados do cadastro<br>
                                • Gerador de código de barras<br>
                                • Compatível com Sistema Operacional Windows98 SE ou superior, exceto para versões
                                Server



                            </p>
                        </div>
                    </div>
                </div>

                <!--Fim Corpo-->
                @endsection
