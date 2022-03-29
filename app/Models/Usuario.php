<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    // Preeche as colunas com loren ipsum
    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'endereco',
        'celular'
    ];

    public function pets(){
        return $this->hasMany(Pet::class);
    }
}

