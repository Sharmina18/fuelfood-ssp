<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'dob' => $this->faker->date,
            'meal_preference' => $this->faker->randomElement(['vegan', 'vegetarian', 'pescatarian', 'omnivore']),
            'dietary_restrictions' => $this->faker->randomElement(['gluten-free', 'dairy-free', 'nut-free', 'none']),
        ];
    }
}
