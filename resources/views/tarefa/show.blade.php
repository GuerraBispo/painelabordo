@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $tarefa->tarefa }}</div>

                    <div class="card-body">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label class="form-label">Detalhes do Artigo, <b>{{ date('d/m/Y', strtotime($tarefa['created_at'])) }}</b></label>
                               
                            </div>
                             <div class="row">
                            <div class="col mb-5">
                                <label class="form-label">Título</label>
                                 <input type="text" class="form-control" value="{{ $tarefa->titulo }}">
                            </div>
                            <div class="col mb-5">
                                <label class="form-label">Subtitulo</label>
                                 <input type="text" class="form-control" value="{{ $tarefa->subtitulo }}">
                            </div>
                            </div>
                            <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Autor</label>
                                 <input type="text" class="form-control" value="{{ $tarefa->autor }}">
                            </div>
                           <div class="col mb-3">
                                <label class="form-label">URL Imagem</label>
                                <img class="card-img-top" src="{{ $tarefa->url_imagem }}"  />
                            </div>
                            </div>
                           
                            <div class="mb-3">
                                <label class="form-label">Artigo</label>
                                <input  class="form-control" value="{{ $tarefa->artigo }}">
                                
                            </div>
                        </fieldset>
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
