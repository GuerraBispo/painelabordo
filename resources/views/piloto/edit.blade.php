@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Atualizar Piloto</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('piloto.update', ['piloto' => $piloto->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col mb-5">
                                    <label class="form-label">Url Imagem Equipe</label>
                                    <input type="text" class="form-control" name="url_imagem_1"
                                        value="{{ $piloto->url_imagem_1 }}">
                                </div>
                                <div class="col mb-5">

                                    <div class="col mb-3">
                                        <label class="form-label">URL Imagem Piloto</label>
                                        <input type="text" class="form-control" name="url_imagem"
                                            value="{{ $piloto->url_imagem_2 }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Piloto</label>
                                    <input type="text" class="form-control" name="nome"
                                        value="{{ $piloto->nome }}"><br>
                                </div>
                                 <div class="col mb-3">
                                    <label class="form-label">Equipe</label>
                                    <input type="text" class="form-control" name="equipe"
                                        value="{{ $piloto->equipe }}"><br>
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Pontos</label>
                                    <input type="text" class="form-control" name="pontos"
                                        value="{{ $piloto->pontos }}">
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
