<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audiencia extends Model
{
    protected $fillable = [
    'titulo',
    'tipo',
    'data_horario',
    'local',
    'descricao'
];

}
