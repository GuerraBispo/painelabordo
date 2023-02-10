@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Atualizar Calendário</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('calendario.update', ['calendario' => $calendario->id]) }}">
                            @csrf
                            @method('PUT')
                             <div class="row">
                              <div class="col mb-5">
                                    <label class="form-label">Nome do gp</label>
                                    <input type="text" class="form-control" name="nome_gp" value="{{ $calendario->nome_gp }}">
                                </div>
                                <div class="col mb-5">
                                    
                                     <div class="col mb-3">
                                    <label class="form-label">URL Imagem</label>
                                    <input type="text" class="form-control" name="url_imagem" value="{{ $calendario->url_imagem }}">
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-12">
                                    <label class="form-label">Quinta-Feira</label>
                                    <input type="text" class="form-control" name="quinta" value="{{ $calendario->quinta }}">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col mb-5">
                                    <label class="form-label">Sexta-Feira</label>
                                    <input type="text" class="form-control" name="sexta_t1" value="{{ $calendario->sexta_t1 }}"><br>
                                    <input type="text" class="form-control" name="sexta_t2" value="{{ $calendario->sexta_t2 }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Sábado</label>
                                    <input type="text" class="form-control" name="sabado_t1" value="{{ $calendario->sabado_t1 }}"><br>
                                    <input type="text" class="form-control" name="sabado_t2" value="{{ $calendario->sabado_t2 }}">
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Domingo</label>
                                    <input type="text" class="form-control" name="domingo" value="{{ $calendario->domingo }}">
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
