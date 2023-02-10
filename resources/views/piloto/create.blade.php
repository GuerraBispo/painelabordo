@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Adicionar Piloto</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('piloto.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Url Imagem Equipe</label>
                                    <input type="text" class="form-control" name="url_imagem_1">
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Url Imagem Piloto</label>
                                    <input type="text" class="form-control" name="url_imagem_2">
                                </div>
                            </div>
                             <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="nome">
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Equipe</label>
                                    <input type="text" class="form-control" name="equipe">
                                </div>
                                 <div class="col mb-3">
                                    <label class="form-label">Pontos</label>
                                    <input type="text" class="form-control" name="pontos">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
