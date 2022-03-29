<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory; // Preeche as colunas com loren ipsum

    protected $table = 'solicitacoes';

    protected $fillable = [
        'nomeUserSolicitante',
        'pet',
        'aceita',
    ];

}
