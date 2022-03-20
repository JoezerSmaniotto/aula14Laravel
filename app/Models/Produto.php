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
        'importado',
        'fornecedor_id'
    ];

    public function fornecedores(){ // Esse metodo de referencia vai ter o Nome da tabela que ele referencia  no caso fornecedores
        // UM PRODUTO TEM UM FORNECEDOR
        return $this->belongsTo(Fornecedor::class);
    }
}
