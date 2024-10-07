<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            'Muscle Gain' => [
                [
                    'duration' => '1 week',
                    'price' => 29.99
                ],
                [
                    'duration' => '2 weeks',
                    'price' => 54.99
                ],
                [
                    'duration' => '1 month',
                    'price' => 99.99
                ],
            ],
            'Weight Loss' => [
                [
                    'duration' => '1 week',
                    'price' => 27.99
                ],
                [
                    'duration' => '2 weeks',
                    'price' => 51.99
                ],
                [
                    'duration' => '1 month',
                    'price' => 95.99
                ],
            ],
            'Maintain Weight' => [
                [
                    'duration' => '1 week',
                    'price' => 28.99
                ],
                [
                    'duration' => '2 weeks',
                    'price' => 53.99
                ],
                [
                    'duration' => '1 month',
                    'price' => 97.99
                ],
            ],
        ];

        foreach ($plans as $name => $plan) {
            foreach ($plan as $data) {
                // Generate a base slug combining name and duration
                $baseSlug = Str::slug($name . ' ' . $data['duration']);
                $slug = $baseSlug;
                $count = 1;

                // Ensure slug uniqueness
                while (Plan::where('slug', $slug)->exists()) {
                    $slug = $baseSlug . '-' . $count;
                    $count++;
                }

                Plan::create([
                    'name' => $name,
                    'slug' => $slug,
                    'duration' => $data['duration'],
                    'price' => $data['price'],
                    'status' => true,
                ]);
            }
        }
    }
}
