<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $table = 'fornecedores'; //pq alterei o nome para fornecedores em
    //vez fornecedors, não estou usando o padrão

    public function produtos (){// nome da tabela, NÃO é o nome do MODELO.
        // UM FORNECEDOR TEM MUITOS PRODUTOS
        return $this->hasMany(Produto::class);
    }

}
