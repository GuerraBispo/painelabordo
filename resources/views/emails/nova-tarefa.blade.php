@component('mail::message')
# {{ $tarefa }}

Data de publicação: {{ $data_limite_conclusao }}

@component('mail::button', ['url' => $url])
Clique aqui para ver o artigo
@endcomponent

Att,<br>
{{ config('app.name') }}
@endcomponent
