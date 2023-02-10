<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilotosTable extends Migration
{
   
    public function up()
    {
        Schema::create('pilotos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('url_imagem_1', 1000)->nullable();
            $table->string('url_imagem_2', 1000)->nullable();
            $table->string('nome', 130)->nullable();
            $table->string('equipe', 130)->nullable();
            $table->double('pontos', 130)->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pilotos');
    }
}
