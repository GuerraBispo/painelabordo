@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Equipes <a href="{{ route('equipe.create') }}" class="float-right">Novo</a>
                    </div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Equipe</th>
                                    <th scope="col">Publicado</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipes as $key => $t)
                                    <tr>
                                        <th scope="row" style="color: #fff">{{ $t['id'] }}</th>
                                        <td><img src="{{ $t['url_imagem'] }}" style="height: 100px; border-radius: 8%" />
                                        <td>{{ $t['nome'] }} </td>
                                        </td>
                                        <td>{{ date('d/m/Y', strtotime($t['created_at'])) }}</td>
                                        <td><a href="{{ route('equipe.show', $t['id']) }}">Detalhes</a></td>
                                        <td><a href="{{ route('equipe.edit', $t['id']) }}">Editar</a></td>
                                        <td>
                                            <form id="form_{{ $t['id'] }}" method="post"
                                                action="{{ route('equipe.destroy', ['equipe' => $t['id']]) }}">
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
                                        href="{{ $equipes->previousPageUrl() }}">Voltar</a></li>

                                @for ($i = 1; $i <= $equipes->lastPage(); $i++)
                                    <li class="page-item {{ $equipes->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $equipes->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                <li class="page-item"><a class="page-link"
                                        href="{{ $equipes->nextPageUrl() }}">Avançar</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
