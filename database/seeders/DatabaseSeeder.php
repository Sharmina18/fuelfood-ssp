<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Reservation;
use App\Models\Subscription;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);

        User::factory(10)->create();

        Reservation::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            SubTypeSeeder::class,
            PlanSeeder::class,
        ]);

        Subscription::factory(10)->create();

        Customer::factory(10)->create();
    }
}
