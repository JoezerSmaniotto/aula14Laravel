<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;


    protected $table = 'pets';

    // Preeche as colunas com loren ipsum
    protected $fillable = [
        'nomePet',
        'sexo',
        'raca',
        'inforAdic',
        'idade',
        'usuario_id' // CHAVE ESTRANGEIRA
    ];

    // Nome da tabela que referencia
    public function usuarios(){
        // Nome do modelo que referencia
        return $this->belongsTo(Usuario::class);
    }
}
