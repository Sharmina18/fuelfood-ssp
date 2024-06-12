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
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'table_number' => $this->faker->randomNumber(2),
            'reservation_date' => $this->faker->date(),
            'number_of_people' => $this->faker->randomNumber(2),
            'slug' => $this->faker->slug(),
            'status' => $this->faker->boolean(),
        ];
    }
}
