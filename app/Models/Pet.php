<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    // Preeche as colunas com loren ipsum
    protected $fillable = [
        'nomePet',
        'sexo',
        'raca',
        'inforAdic',
        'idade'
    ];
}
