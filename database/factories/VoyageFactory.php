<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voyage>
 */
class VoyageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'description' => $this->faker->text(),
            'duree' => 3,
            'villeDepart' => $this->faker->city(),
            'villeArrivee' => $this->faker->city(),
            'date' => $this->faker->date(),
            'heureDepart' => '07:00',
            'heureArrivee' => '15:00',
            'type' => 'Tour',
            'prix' => $this->faker->numberBetween($min = 1000,$max = 2000)
        ];
    }
}
