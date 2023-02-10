@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Atualizar Artigo</div>

                <div class="card-body">
                    <form method="post" action="{{ route('tarefa.update', ['tarefa' => $tarefa->id]) }}">
                        @csrf
                        @method('PUT')
                         <div class="row">
                            <div class="col mb-5">
                                <label class="form-label">Título</label>
                                <input type="text" class="form-control" name="titulo" value="{{$tarefa->titulo}}">
                            </div>
                            <div class="col mb-5">
                                <label class="form-label">Subtitulo</label>
                                <input type="text" class="form-control" name="subtitulo" value="{{$tarefa->subtitulo}}">
                            </div>
                            </div>
                            <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Autor</label>
                                <input type="text" class="form-control" name="autor" value="{{$tarefa->autor}}">
                            </div>
                           <div class="col mb-3">
                                <label class="form-label">URL Imagem</label>
                                <input type="text" class="form-control" name="url_imagem" value="{{$tarefa->url_imagem}}">
                            </div>
                            </div>
                           
                            <div class="mb-3">
                                <label class="form-label">Artigo</label>
                                <input  class="form-control" name="artigo" value="{{$tarefa->artigo}}" rows="5" cols="33">
                                
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
