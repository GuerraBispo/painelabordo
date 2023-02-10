@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $piloto->piloto }}</div>

                    <div class="card-body">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label class="form-label">Detalhes do Piloto,
                                    <b>{{ date('d/m/Y', strtotime($piloto['created_at'])) }}</b></label>

                            </div>
                            <div class="row">
                                <div class="col mb-5">
                                    <label class="form-label">Imagem Equipe</label>
                                   <img src="{{ $piloto->url_imagem_1 }}" style="height: 100px" />
                                </div>
                                <div class="col mb-5">
                                    <label class="form-label">Imagem Piloto</label>
                                    <img src="{{ $piloto->url_imagem_2 }}" style="height: 100px" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control" value="{{ $piloto->nome }}">
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Equipe</label>
                                    <input type="text" class="form-control" value="{{ $piloto->equipe }}">
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Pontos</label>
                                    <input type="text" class="form-control" value="{{ $piloto->pontos }}">
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
