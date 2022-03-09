<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    // Preeche as colunas com loren ipsum
    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'endereco',
        'celular'
    ];
}
