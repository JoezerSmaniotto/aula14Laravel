<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    protected $model = Pet::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomePet'=>$this->faker->word(),
            'sexo'=>$this->faker->text(5),
            'raca'=>$this->faker->word(),
            'inforAdic'=>$this->faker->word(),
            'idade'=>$this->faker->randomNumber(2),
        ];
    }
}
