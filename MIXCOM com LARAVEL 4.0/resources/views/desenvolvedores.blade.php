@extends('layouts.appDesenvolvedores')
@section('pagina_desenvolvedores')
<div class="card">
    <h4 class="card-header bg-dark text-white">
        Desenvolvedores
    </h4>
    <div class="card-body">
        <div class="media">
            <img class="align-self-start mr-3 rounded-circle border border-dark" src="{{ asset('imagens/Desenvolvedores/Marcelo.jpg') }}" style="width: 110px; height: 100px;" alt="Generic placeholder image">
            <div class="media-body">
                <h2 class="card-title">Marcelo Moreira de Oliveira</h2>
                <h5 class="title">Habilidades Web</h5>
                <label class="col-sm-2 col-form-label">Laravel/PHP:</label>
                <div class="progress" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                </div>
                <label class="col-sm-2 col-form-label">CSS:</label>
                <div class="progress" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                </div>
                <label class="col-sm-2 col-form-label">JavaScript:</label>
                <div class="progress" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                </div>
                <a class="btn btn-outline-info rounded-circle" href="#"><i class="fab fa-facebook-square"></i></a>
                <a class="btn btn btn-outline-success rounded-circle" href="#"><i class="fab fa-whatsapp"></i></a>
               <a class="btn btn btn-outline-danger rounded-circle" href="#"> <i class="far fa-envelope"></i></a>
            </div>
        </div>

    </div>
    @endsection
