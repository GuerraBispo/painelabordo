@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Atualizar Equipe</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('equipe.update', ['equipe' => $equipe->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col mb-5">
                                    <label class="form-label">Url Imagem Equipe</label>
                                    <input type="text" class="form-control" name="url_imagem"
                                        value="{{ $equipe->url_imagem }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Equipe</label>
                                    <input type="text" class="form-control" name="nome"
                                        value="{{ $equipe->nome }}"><br>
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Pontos</label>
                                    <input type="text" class="form-control" name="pontos"
                                        value="{{ $equipe->pontos }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
