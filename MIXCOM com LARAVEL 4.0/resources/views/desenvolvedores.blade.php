@extends('layouts.appDesenvolvedores')
@section('pagina_desenvolvedores')
<div class="card">
    <h4 class="card-header bg-dark text-white">
        Desenvolvedores
    </h4>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <img class="align-self-start mr-3 rounded-circle border border-dark" src="{{ asset('imagens/Desenvolvedores/lays.jpg') }}" style="width: 110px; height: 100px;" alt="Generic placeholder image">
                </div>
                <div class="col-sm-7 col-md-7 col-lg-7">
                    <div class="media-body">
                        <div class="container">
                        <h2 class="card-title">Lays Santos Brito Pereira </h2>
                        <h5 class="title">Habilidades Web</h5>

                        <label class="col-sm- col-form-label">Laravel/PHP:</label>
                        <div class="progress row l2 s12 m2" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                        </div>
                        <label class="col-sm- col-form-label">CSS:</label>
                        <div class="progress" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                        </div>
                        <label class="col-sm- col-form-label">JavaScript:</label>
                        <div class="progress" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h2>Contatos</h2>
                    <div class="my-3">
                    <a class="btn btn-outline-info rounded-circle" href="{{asset('https://www.facebook.com/laysbrito17')}}" ><i class="fab fa-facebook-square"></i></a>
                    <a class="btn btn btn-outline-success rounded-circle" href="{{asset('https://api.whatsapp.com/send?phone=5575991782583&text=envie%20uma%20menssagem')}}"><i class="fab fa-whatsapp"></i></a>
                    <button type="button" class="btn btn btn-outline-danger rounded-circle" data-toggle="tooltip" data-placement="bottom" title="E-mail: laysbrito17@gmail.com"><i class="far fa-envelope"></i>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="col-12 mb-3">
    <hr>
</div>

<div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <img class="align-self-start mr-3 rounded-circle border border-dark" src="{{ asset('imagens/Desenvolvedores/lucas.jpg') }}" style="width: 110px; height: 100px;" alt="Generic placeholder image">
                </div>
                <div class="col-sm-7 col-md-7 col-lg-7">
                    <div class="media-body">
                        <div class="container">
                        <h2 class="card-title">Lucas de Sousa Santana</h2>
                        <h5 class="title">Habilidades Web</h5>

                        <label class="col-sm- col-form-label">Laravel/PHP:</label>
                        <div class="progress row l2 s12 m2" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                        </div>
                        <label class="col-sm- col-form-label">CSS:</label>
                        <div class="progress" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                        </div>
                        <label class="col-sm- col-form-label">JavaScript:</label>
                        <div class="progress" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">25%</div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h2>Contatos</h2>
                    <div class="my-3">
                    <a class="btn btn-outline-info rounded-circle" href="{{asset('https://www.facebook.com/lucas.santana.1010')}}"><i class="fab fa-facebook-square"></i></a>
                    <a class="btn btn btn-outline-success rounded-circle" href="{{asset('https://api.whatsapp.com/send?phone=5575983014336&text=envie%20uma%20mensagem')}}"><i class="fab fa-whatsapp"></i></a>
                    <button type="button" class="btn btn btn-outline-danger rounded-circle" data-toggle="tooltip" data-placement="bottom" title="E-mail: lucas.dsousast@gmail.com"><i class="far fa-envelope"></i>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <img class="align-self-start mr-3 rounded-circle border border-dark" src="{{ asset('imagens/Desenvolvedores/Marcelo.jpg') }}" style="width: 110px; height: 100px;" alt="Generic placeholder image">
                </div>
                <div class="col-sm-7 col-md-7 col-lg-7">
                    <div class="media-body">
                        <div class="container">
                        <h2 class="card-title">Marcelo Moreira de Oliveira</h2>
                        <h5 class="title">Habilidades Web</h5>

                        <label class="col-sm- col-form-label">Laravel/PHP:</label>
                        <div class="progress row l2 s12 m2" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                        </div>
                        <label class="col-sm- col-form-label">CSS:</label>
                        <div class="progress" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                        </div>
                        <label class="col-sm- col-form-label">JavaScript:</label>
                        <div class="progress" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h2>Contatos</h2>
                    <div class="my-3">
                    <a class="btn btn-outline-info rounded-circle" href="{{asset('https://www.facebook.com/Marcelo.M.de.Olliveira')}}" ><i class="fab fa-facebook-square"></i></a>
                    <a class="btn btn btn-outline-success rounded-circle" href="{{asset('https://api.whatsapp.com/send?phone=5575991778281&text=envie%20uma%20menssagem')}}"><i class="fab fa-whatsapp"></i></a>
                    <button type="button" class="btn btn btn-outline-danger rounded-circle" data-toggle="tooltip" data-placement="bottom" title="E-mail: marcelomra.oliveira@gmail.com"><i class="far fa-envelope"></i>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="col-12 mb-3">
    <hr>
</div>


<div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <img class="align-self-start mr-3 rounded-circle border border-dark" src="{{ asset('imagens/Desenvolvedores/tamires.png') }}" style="width: 110px; height: 100px;" alt="Generic placeholder image">
                </div>
                 <div class="col-sm-7 col-md-7 col-lg-7">
                    <div class="media-body">
                        <div class="container">
                        <h2 class="card-title">Tamires Santos Almeida</h2>
                        <h5 class="title">Habilidades Web</h5>

                        <label class="col-sm- col-form-label">Laravel/PHP:</label>
                        <div class="progress row l2 s12 m2" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">55%</div>
                        </div>
                        <label class="col-sm- col-form-label">CSS:</label>
                        <div class="progress" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 80%">90%</div>
                        </div>
                        <label class="col-sm- col-form-label">JavaScript:</label>
                        <div class="progress" style="width: 300px; margin-top: -27px; margin-left: 105px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h2>Contatos</h2>
                    <div class="my-3">
                    <a class="btn btn-outline-info rounded-circle" href="{{asset('https://www.facebook.com/Tamires.santos14')}}" ><i class="fab fa-facebook-square"></i></a>
                    <a class="btn btn btn-outline-success rounded-circle" href="{{asset('https://api.whatsapp.com/send?phone=5575981144791&text=Envie%20uma%20menssagem')}}"><i class="fab fa-whatsapp"></i></a>
                    <button type="button" class="btn btn btn-outline-danger rounded-circle" data-toggle="tooltip" data-placement="bottom" title="E-mail: tamires.santos1432@gmail.com"><i class="far fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

<div class="col-12 mb-3">
    <hr>
</div>
<a class="btn btn-primary" href="/">Voltar para o Site</a>
</div>
</div>
</div>

@endsection
