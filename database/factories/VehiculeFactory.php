<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicule>
 */
class VehiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "matricule" => $this->faker->numberBetween($min = 1,$max = 60000),
            "capacite" => $this->faker->numberBetween($min = 4,$max = 7)
        ];
    }
}
