@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $equipe->equipe }}</div>

                    <div class="card-body">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label class="form-label">Detalhes do equipe,
                                    <b>{{ date('d/m/Y', strtotime($equipe['created_at'])) }}</b></label>

                            </div>
                            <div class="row">
                                <div class="col mb-5">
                                    <label class="form-label">Imagem Equipe</label>
                                   <img src="{{ $equipe->url_imagem }}" style="height: 100px" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control" value="{{ $equipe->nome }}">
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Pontos</label>
                                    <input type="text" class="form-control" value="{{ $equipe->pontos }}">
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
