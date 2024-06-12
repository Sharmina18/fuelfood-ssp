<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
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
            'email' => $this->faker->email(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'meal_preference' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'status' => $this->faker->boolean(),
        ];
    }
}
