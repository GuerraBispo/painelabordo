<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{
    use HasFactory;
    protected $fillable = ['url_imagem_1', 'url_imagem_2', 'nome', 'equipe', 'pontos', 'user_id'];

}

