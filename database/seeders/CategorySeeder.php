<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Muscle Gain' => [
                'Grilled Chicken Breast with Quinoa',
                'Salmon Fillet with Sweet Potato Mash',
                'Beef Stir-Fry with Broccoli and Brown Rice'
            ],
            'Weight Loss' => [
                'Zucchini Noodles with Marinara Sauce',
                'Grilled Vegetable Salad with Balsamic Vinaigrette',
                'Chickpea and Avocado Salad'
            ],
            'Maintain' => [
                'Whole Grain Wrap with Turkey and Spinach',
                'Lentil Soup with Whole Wheat Bread',
                'Baked Cod with Asparagus'
            ],
            'Protein shakes' => [
                'Vanilla Whey Protein Shake with Almond Milk',
                'Chocolate Peanut Butter Protein Smoothie',
                'Berry Blast Protein Shake with Spinach'
            ],
            'Snacks' => [
                'Greek Yogurt with Honey and Nuts',
                'Rice Cakes with Avocado Spread',
                'Carrot Sticks with Hummus'
            ],
            'Beverages' => [
                'Green Smoothie with Kale and Pineapple',
                'Infused Water with Lemon and Mint',
                'Unsweetened Almond Milk'
            ],
            'Desserts' => [
                'Chia Seed Pudding with Coconut Milk',
                'Banana Oat Cookies',
                'Dark Chocolate Avocado Mousse'
            ]
        ];

        foreach ($categories as $category => $items) {
            $parent = \App\Models\Category::create([
                'title' => $category,
                'slug' => \Illuminate\Support\Str::slug($category),
                'description' => 'This category contains ' . $category . ' items',
                'status' => true
            ]);

            foreach ($items as $item) {
                \App\Models\Category::create([
                    'title' => $item,
                    'slug' => \Illuminate\Support\Str::slug($item),
                    'description' => 'This item belongs to ' . $category,
                    'status' => true,
                    'parent_id' => $parent->id
                ]);
            }
        }

    }
}
