<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    protected $fillable = [
        'cliente_id',
        'numero_processo',
        'tipo',
        'status',
        'descricao',
        'documento',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function audiencias()
    {
        return $this->hasMany(Audiencia::class);
    }
}
