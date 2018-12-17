@extends('layouts.app')
@section('pagina_conteudo')
<br><br><br><br>
<div class="container">
	<h1 class="center-align">Produtos</h1>
	<div class="container">
		<div class="row">
			<div class="caixa col-md-3 col-sm-3 col-xs-3">
				<div class="col-12 mb-3">
					<hr>
				</div>
                @component('components.menu_lateral_prod') @endcomponent
			</div>
			<div class="caixa col-md-8 col-sm-8 col-xs-8">
				<div class="card-group"></div>
				<div class="col-12 md-3">
					<hr>
				</div>
                <div class = "row" >
                    @foreach($registros as $registro)
					<div class="card table-responsive" style="width: 15em; word-wrap: break-word; margin: 5px">
						<br>
						<img src="{{ asset($registro->imagem) }}" class="img-responsive card-img-top" style= "width: 55%;" >
						<div class="card-body">

							<a href="{{ route('produto', $registro->id) }}">
								<h6 class="card-title text-dark my-3 ">{{$registro->nome}}</h6>
							</a>
							<p class="distancia card-subtitle mb-2 text-muted my-3">A vista:</p>
							<h5 class=" distancia card-title mb-2 text-muted my-3">{{$registro->valor}}</h5>
							<p class=" distancia card-subtitle mb-2 text-muted my-3">10x de R$113,55 sem juros</p>
						</div>

						<div class="card-footer cor1">
							<small class="text-muted">
								<center><a class="text-light" href="{{ route('produto', $registro->id) }}">Ver mais sobre o Produto</a>
                                </small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
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
                <h5>Produtos Relacionados</h5>
                <br>
                @component('components.carousel_prod')@endcomponent
			</div>
		</div>
	</div>
</div>

@endsection
