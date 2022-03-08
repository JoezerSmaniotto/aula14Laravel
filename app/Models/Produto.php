<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    // Preeche as colunas com loren ipsum
    protected $fillable = [
        'nome',
        'descricao',
        'qtd_estoque',
        'preco',
        'importado'
    ];
}
