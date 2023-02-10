<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;

Route::resource('/', 'App\Http\Controllers\HomeController');

Auth::routes(['verify' => true]);

Route::resource('tarefa', 'App\Http\Controllers\TarefaController')
    ->middleware('verified');

Route::resource('calendario', 'App\Http\Controllers\CalendarioController')
    ->middleware('verified');

Route::resource('piloto', 'App\Http\Controllers\PilotoController')
    ->middleware('verified');
   
Route::resource('equipe', 'App\Http\Controllers\EquipeController')
    ->middleware('verified');    

Route::get('/mensagem-teste', function() {
    return new MensagemTesteMail();
});