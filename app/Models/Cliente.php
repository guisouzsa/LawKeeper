<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        "nomeCompleto",
        "cpf_Cnpj",
        "telefone",
        "email",
        "endereco"
    ];

    public function processos()
    {
        return $this->hasMany(Processo::class);
    }
}
