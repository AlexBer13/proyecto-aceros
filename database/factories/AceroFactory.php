<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acero>
 */
class AceroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           
            'tipo_de_calibre' => $this->faker->word(),
            'costos' => $this->faker->randomNumber(5, false),
            'cantidad' => $this->faker->randomDigit(),

        ];
    }
}
