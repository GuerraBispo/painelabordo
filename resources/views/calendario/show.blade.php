@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $calendario->calendario }}</div>

                    <div class="card-body">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label class="form-label">Detalhes do Calendário,
                                    <b>{{ date('d/m/Y', strtotime($calendario['created_at'])) }}</b></label>

                            </div>
                            <div class="row">
                                <div class="col mb-5">
                                    <label class="form-label">Nome do gp</label>
                                    <input type="text" class="form-control" value="{{ $calendario->nome_gp }}">
                                </div>
                                <div class="col mb-5">
                                    <label class="form-label">Imagem</label>
                                   <img src="{{ $calendario->url_imagem }}" style="height: 100px"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-12">
                                    <label class="form-label">Quinta-Feira</label>
                                    <input type="text" class="form-control" value="{{ $calendario->quinta }}">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col mb-5">
                                    <label class="form-label">Sexta-Feira</label>
                                    <input type="text" class="form-control" value="{{ $calendario->sexta_t1 }}"><br>
                                    <input type="text" class="form-control" value="{{ $calendario->sexta_t2 }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Sábado</label>
                                    <input type="text" class="form-control" value="{{ $calendario->sabado_t1 }}"><br>
                                    <input type="text" class="form-control" value="{{ $calendario->sabado_t2 }}">
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Domingo</label>
                                    <input type="text" class="form-control" value="{{ $calendario->domingo }}">
                                </div>
                            </div>

                        </fieldset>
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
