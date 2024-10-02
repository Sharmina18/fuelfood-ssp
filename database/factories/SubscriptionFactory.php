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
            'duration' => $this->faker->name(),
            'meal_goal' => $this->faker->name(),
            'dietary_preference' => $this->faker->name(),
            'address' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'status' => $this->faker->boolean(),
        ];
    }
}
