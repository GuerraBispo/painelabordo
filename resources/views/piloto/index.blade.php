@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Calendário <a href="{{ route('piloto.create') }}" class="float-right">Novo</a>
                    </div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Piloto</th>
                                    <th scope="col">Publicado</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pilotos as $key => $t)
                                    <tr>
                                        <th scope="row" style="color: #fff">{{ $t['id'] }}</th>
                                        <td><img src="{{ $t['url_imagem_2'] }}" style="height: 100px"/></td>
                                        <td>{{$t['nome']}} </td>
                                        <td>{{ date('d/m/Y', strtotime($t['created_at'])) }}</td>
                                        <td><a href="{{ route('piloto.show', $t['id']) }}">Detalhes</a></td>
                                        <td><a href="{{ route('piloto.edit', $t['id']) }}">Editar</a></td>
                                        <td>
                                            <form id="form_{{ $t['id'] }}" method="post"
                                                action="{{ route('piloto.destroy', ['piloto' => $t['id']]) }}">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            <a href="#"
                                                onclick="document.getElementById('form_{{ $t['id'] }}').submit()">Excluir</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link"
                                        href="{{ $pilotos->previousPageUrl() }}">Voltar</a></li>

                                @for ($i = 1; $i <= $pilotos->lastPage(); $i++)
                                    <li class="page-item {{ $pilotos->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $pilotos->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                <li class="page-item"><a class="page-link"
                                        href="{{ $pilotos->nextPageUrl() }}">Avançar</a>
                                </li>
                            </ul>
                        </nav>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
