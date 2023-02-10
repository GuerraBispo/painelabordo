<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefasTable extends Migration
{
   
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('titulo', 30);
            $table->string('subtitulo', 30);
            $table->string('autor', 30);
            $table->string('url_imagem', 1000);
            $table->string('artigo', 8000);
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();

        });
    }

   
    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
}
