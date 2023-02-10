<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;
    protected $fillable = ['nome_gp','url_imagem', 'quinta', 'sexta_t1', 'sexta_t2', 'sabado_t1', 'sabado_t2', 'domingo', 'user_id'];

}
