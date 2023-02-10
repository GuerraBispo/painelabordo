<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendariosTable extends Migration
{
    
    public function up()
    {
        Schema::create('calendarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nome_gp', 130)->nullable();
            $table->string('url_imagem', 1000)->nullable();
            $table->string('quinta', 130)->nullable();
            $table->string('sexta_t1', 130)->nullable();
            $table->string('sexta_t2', 130)->nullable();
            $table->string('sabado_t1', 130)->nullable();
            $table->string('sabado_t2', 130)->nullable();
            $table->string('domingo', 130)->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('calendarios');
    }
}
