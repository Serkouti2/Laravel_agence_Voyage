<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'nombrePlace' => $this->faker->numberBetween($min = 1,$max = 5),
            'client_id' => $this->faker->numberBetween($min = 1,$max = 10),
            'voyage_id' =>$this->faker->numberBetween($min = 1,$max = 10)

        ];
    }
}
