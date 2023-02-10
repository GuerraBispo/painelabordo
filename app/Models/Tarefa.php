<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'subtitulo', 'autor', 'url_imagem', 'artigo', 'user_id'];
}

