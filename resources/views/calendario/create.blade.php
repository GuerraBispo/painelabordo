@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Adicionar Calendário</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('calendario.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col mb-5">
                                    <label class="form-label">Nome do gp</label>
                                    <input type="text" class="form-control" name="nome_gp" placeholder="Informe o nome.">
                                </div>
                                <div class="col mb-5">
                                    <label class="form-label">Url da Imagem</label>
                                    <input type="text" class="form-control" name="url_imagem"
                                        placeholder="Cole aqui a Url.">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-12">
                                    <label class="form-label">Quinta-Feira</label>
                                    <input type="text" class="form-control" name="quinta"
                                        placeholder="Digite horário da corrida ou do treino caso tenha.">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col mb-5">
                                    <label class="form-label">Sexta-Feira</label>
                                    <input type="text" class="form-control" name="sexta_t1"
                                        placeholder="Digite horário da corrida ou do treino caso tenha."><br>
                                    <input type="text" class="form-control" name="sexta_t2"
                                        placeholder="Digite horário da corrida ou do treino caso tenha.">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Sábado</label>
                                    <input type="text" class="form-control" name="sabado_t1"
                                        placeholder="Digite horário da corrida ou do treino caso tenha."><br>
                                    <input type="text" class="form-control" name="sabado_t2"
                                        placeholder="Digite horário da corrida ou do treino caso tenha.">
                                </div>
                                <div class="col mb-3">
                                    <label class="form-label">Domingo</label>
                                    <input type="text" class="form-control" name="domingo"
                                        placeholder="Horário da corrida.">
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
