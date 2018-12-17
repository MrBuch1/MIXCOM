@extends('layouts.app')

@section('pagina_conteudo')

<div class="container">
    <br><br>
    <div class="row" style="margin-top: 70px; margin-left: 400px">
        <h1>Produtos no Carrinho</h1>
        <hr/>
    </div>
        @if (Session::has('mensagem-sucesso'))
            <div class="card-panel green">
                <strong>{{ Session::get('mensagem-sucesso') }}</strong>
            </div>
        @endif
        @if (Session::has('mensagem-falha'))
            <div class="card-panel red">
                <strong>{{ Session::get('mensagem-falha') }}</strong>
            </div>
        @endif
        @forelse ($pedidos as $pedido)
            <h4 class="col l6 s12 m6" style="align-self: center; margin-left: 450px"> Número Pedido: 00{{ $pedido->id }} </h4>
            <h5 class="col l6 s12 m6" style="align-self: center; margin-left: 435px"> Criado em: {{ $pedido->created_at->format('d/m/Y H:i') }} </h5>
            <table class="table table-hover col l6 s12 m6" style="margin-top: 50px">
                <thead>
                    <tr class="table-info">
                        <th></th>
                        <th>Quantidade</th>
                        <th>Produto</th>
                        <th>Valor Unit.</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total_pedido = 0;
                    @endphp
                    @foreach ($pedido->pedido_produtos as $pedido_produto)

                    <tr>
                        <td>
                            <img width="150" height="100" style="margin-right: -50px" src="{{ $pedido_produto->produto->imagem }}">
                        </td>

                        <td class="center-align">
                            <div class="center-align" style="margin-left: -27px">
                                <a class="col l4 m4 s4" href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 1 )">
                                    <i class="material-icons small">remove_circle_outline</i>
                                </a>
                                <span class="col l4 m4 s4"> {{ $pedido_produto->qtd }} </span>
                                <a class="col l4 m4 s4" href="#" onclick="carrinhoAdicionarProduto({{ $pedido_produto->produto_id }})">
                                    <i class="material-icons small">add_circle_outline</i>
                                </a>
                            </div>
                            <a href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 0)" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Retirar produto do carrinho?"></a>
                        </td>
                        <td> {{ $pedido_produto->produto->nome }} </td>
                        <td>R$ {{ number_format($pedido_produto->produto->valor, 2, ',', '.') }}</td>
                        @php
                            $total_produto = $pedido_produto->valores - $pedido_produto->descontos;
                            $total_pedido += $total_produto;
                        @endphp
                        <td>R$ {{ number_format($total_produto, 2, ',', '.') }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="ml-2 my-3 row">
                <strong class="flow-text offset-8 offset-m6 offset-s6 right-align">Total do pedido: R$ {{ number_format($total_pedido, 2, ',', '.') }}</strong>
                
            </div>
            <div class="ml-auto mr-4">
                <div class="ml-5 row">
                    <a class="btn btn-outline-success mr-3 offset-8" href="{{ route('index') }}">Compre Mais!</a>
                    <form method="POST" action="{{ route('carrinho.concluir') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
                    <button type="submit" class="btn btn-outline-primary">
                            Concluir compra
                        </button>   
                    </form>
                </div>
            </div>
            
        @empty
            <h5 style="margin-left: 425px">Não há nenhum pedido no carrinho</h5>
        @endforelse
    </div>
</div>

<form id="form-remover-produto" method="POST" action="{{ route('carrinho.remover') }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="hidden" name="pedido_id">
    <input type="hidden" name="produto_id">
    <input type="hidden" name="item">
</form>
<form id="form-adicionar-produto" method="POST" action="{{ route('carrinho.adicionar') }}">
    {{ csrf_field() }}
    <input type="hidden" name="id">
</form>

@push('scripts')
    <script type="text/javascript" src="/js/carrinho.js"></script>
@endpush

@endsection