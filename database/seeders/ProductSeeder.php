<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            'Muscle Gain' => [
                [
                    'name' => 'Grilled Chicken Breast with Quinoa',
                    'category' => 'Muscle Gain',
                    'description' => 'Juicy grilled chicken breast served with fluffy quinoa and steamed broccoli.',
                    'price' => 12.99
                ],
                [
                    'name' => 'Salmon Fillet with Sweet Potato Mash',
                    'category' => 'Muscle Gain',
                    'description' => 'Oven-baked salmon fillet served with creamy sweet potato mash and a side of greens.',
                    'price' => 14.49
                ]
            ],
            'Weight Loss' => [
                [
                    'name' => 'Zucchini Noodles with Marinara Sauce',
                    'category' => 'Weight Loss',
                    'description' => 'Light and fresh zucchini noodles topped with a homemade marinara sauce.',
                    'price' => 9.99
                ],
                [
                    'name' => 'Grilled Vegetable Salad with Balsamic Vinaigrette',
                    'category' => 'Weight Loss',
                    'description' => 'A colorful salad of grilled seasonal vegetables drizzled with balsamic vinaigrette.',
                    'price' => 10.49
                ]
            ],
            'Maintain' => [
                [
                    'name' => 'Whole Grain Wrap with Turkey and Spinach',
                    'category' => 'Maintain',
                    'description' => 'Whole grain wrap filled with sliced turkey, fresh spinach, and a light spread.',
                    'price' => 8.99
                ],
                [
                    'name' => 'Lentil Soup with Whole Wheat Bread',
                    'category' => 'Maintain',
                    'description' => 'Hearty lentil soup served with a slice of warm whole wheat bread.',
                    'price' => 7.49
                ]
            ],
            'Protein shakes' => [
                [
                    'name' => 'Vanilla Whey Protein Shake with Almond Milk',
                    'category' => 'Protein shakes',
                    'description' => 'Creamy vanilla protein shake blended with almond milk and a hint of honey.',
                    'price' => 5.99
                ],
                [
                    'name' => 'Chocolate Peanut Butter Protein Smoothie',
                    'category' => 'Protein shakes',
                    'description' => 'Rich chocolate smoothie with natural peanut butter and a banana.',
                    'price' => 6.49
                ]
            ],
            'Snacks' => [
                [
                    'name' => 'Greek Yogurt with Honey and Nuts',
                    'category' => 'Snacks',
                    'description' => 'Creamy Greek yogurt drizzled with honey and topped with mixed nuts.',
                    'price' => 4.99
                ],
                [
                    'name' => 'Rice Cakes with Avocado Spread',
                    'category' => 'Snacks',
                    'description' => 'Crispy rice cakes topped with fresh avocado and a sprinkle of sea salt.',
                    'price' => 3.99
                ]
            ],
            'Beverages' => [
                [
                    'name' => 'Green Smoothie with Kale and Pineapple',
                    'category' => 'Beverages',
                    'description' => 'Refreshing green smoothie made with kale, pineapple, and coconut water.',
                    'price' => 5.49
                ],
                [
                    'name' => 'Infused Water with Lemon and Mint',
                    'category' => 'Beverages',
                    'description' => 'Cool and refreshing water infused with fresh lemon slices and mint leaves.',
                    'price' => 2.99
                ]
            ],
            'Desserts' => [
                [
                    'name' => 'Chia Seed Pudding with Coconut Milk',
                    'category' => 'Desserts',
                    'description' => 'Creamy chia seed pudding made with coconut milk, served with fresh berries.',
                    'price' => 4.49
                ],
                [
                    'name' => 'Dark Chocolate Avocado Mousse',
                    'category' => 'Desserts',
                    'description' => 'Rich and creamy mousse made with ripe avocados and dark chocolate.',
                    'price' => 5.99
                ]
            ]
        ];

        foreach ($products as $category => $items) {
            foreach ($items as $item) {
                \App\Models\Product::create([
                    'name' => $item['name'],
                    'description' => $item['description'],
                    'price' => $item['price'],
                    'category_id' => \App\Models\Category::where('title', $category)->first()->id,
                    'sort_order' => 0,
                    'status' => true
                ]);
            }
        }

    }
}
