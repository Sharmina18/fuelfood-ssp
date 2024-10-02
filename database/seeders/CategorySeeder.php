<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define categories with distinct descriptions
        $categories = [
            'Muscle Gain' => [
                'description' => 'Explore our delicious and nutrient-dense meals specifically crafted to support muscle gain. Each dish is designed to provide the necessary proteins, carbs, and healthy fats that fuel your workouts and recovery, ensuring you reach your fitness goals effectively.',
                'items' => [
                    'Grilled Chicken Breast with Quinoa',
                    'Salmon Fillet with Sweet Potato Mash',
                    'Beef Stir-Fry with Broccoli and Brown Rice'
                ],
            ],
            'Weight Loss' => [
                'description' => 'Discover a selection of healthy and low-calorie meals aimed at assisting your weight loss journey. These dishes are packed with flavor while being mindful of portion sizes and calorie counts, helping you to achieve your goals without sacrificing taste.',
                'items' => [
                    'Zucchini Noodles with Marinara Sauce',
                    'Grilled Vegetable Salad with Balsamic Vinaigrette',
                    'Chickpea and Avocado Salad'
                ],
            ],
            'Maintain' => [
                'description' => 'Our balanced meal options are perfect for maintaining your current weight and overall health. Each dish is thoughtfully prepared to provide the right balance of nutrients, ensuring you stay energized and satisfied without gaining weight.',
                'items' => [
                    'Whole Grain Wrap with Turkey and Spinach',
                    'Lentil Soup with Whole Wheat Bread',
                    'Baked Cod with Asparagus'
                ],
            ],
            'Protein shakes' => [
                'description' => 'Enjoy our nutritious protein shakes designed to supplement your diet and provide the necessary nutrients post-workout. Each shake is made with high-quality ingredients to ensure optimal recovery and muscle repair.',
                'items' => [
                    'Vanilla Whey Protein Shake with Almond Milk',
                    'Chocolate Peanut Butter Protein Smoothie',
                    'Berry Blast Protein Shake with Spinach'
                ],
            ],
            'Snacks' => [
                'description' => 'Satisfy your cravings with our healthy snack options. These snacks are ideal for keeping your energy levels up throughout the day while providing essential nutrients that fit into your diet plan.',
                'items' => [
                    'Greek Yogurt with Honey and Nuts',
                    'Rice Cakes with Avocado Spread',
                    'Carrot Sticks with Hummus'
                ],
            ],
            'Beverages' => [
                'description' => 'Stay hydrated and nourished with our refreshing beverage options. Each drink is crafted to complement your healthy lifestyle, offering hydration and essential nutrients without added sugars.',
                'items' => [
                    'Green Smoothie with Kale and Pineapple',
                    'Infused Water with Lemon and Mint',
                    'Unsweetened Almond Milk'
                ],
            ],
            'Desserts' => [
                'description' => 'Indulge in our guilt-free desserts that satisfy your sweet cravings without compromising your health goals. These delightful treats are made with wholesome ingredients to provide a sweet finish to your meals.',
                'items' => [
                    'Chia Seed Pudding with Coconut Milk',
                    'Banana Oat Cookies',
                    'Dark Chocolate Avocado Mousse'
                ],
            ],
        ];

        foreach ($categories as $category => $details) {
            // Create the parent category with a distinct description
            $parent = \App\Models\Category::create([
                'title' => $category,
                'slug' => Str::slug($category),
                'description' => $details['description'], // Use the distinct description
                'status' => true
            ]);

            // Create child items
            foreach ($details['items'] as $item) {
                \App\Models\Category::create([
                    'title' => $item,
                    'slug' => Str::slug($item),
                    'description' => 'This item belongs to the ' . $category . ' category, offering a nutritious and delicious option for your meal plan.',
                    'status' => true,
                    'parent_id' => $parent->id // Set the parent category ID
                ]);
            }
        }
    }
}


