<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome'=> $this->faker->word(),
            'email'=> $this->faker->email(),
            'cpf'=>$this->faker->cpf(),
            'endereco'=> $this->faker->sentence(3).' - '.$this->faker->region(),
            'celular'=>$this->faker->cellphoneNumber()
        ];
    }
}
