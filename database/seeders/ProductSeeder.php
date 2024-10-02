<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

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
                    'price' => 12.99,
                    'image' => 'https://www.cookingclassy.com/wp-content/uploads/2017/02/grilled-chicken-burrito-bowls-10.jpg'
                ],
                [
                    'name' => 'Salmon Fillet with Sweet Potato Mash',
                    'category' => 'Muscle Gain',
                    'description' => 'Oven-baked salmon fillet served with creamy sweet potato mash and a side of greens.',
                    'price' => 14.49,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Beef Stir-Fry with Broccoli and Brown Rice',
                    'category' => 'Muscle Gain',
                    'description' => 'Tender beef stir-fried with fresh broccoli and served over a bed of brown rice.',
                    'price' => 15.99,
                    'image' => 'https://www.skinnytaste.com/wp-content/uploads/2023/04/Ground-Beef-and-Broccoli-8.jpg'
                ]
            ],
            'Weight Loss' => [
                [
                    'name' => 'Zucchini Noodles with Marinara Sauce',
                    'category' => 'Weight Loss',
                    'description' => 'Light and fresh zucchini noodles topped with a homemade marinara sauce.',
                    'price' => 9.99,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Grilled Vegetable Salad with Balsamic Vinaigrette',
                    'category' => 'Weight Loss',
                    'description' => 'A colorful salad of grilled seasonal vegetables drizzled with balsamic vinaigrette.',
                    'price' => 10.49,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Chickpea and Avocado Salad',
                    'category' => 'Weight Loss',
                    'description' => 'A refreshing salad made with chickpeas, avocado, cherry tomatoes, and a light dressing.',
                    'price' => 8.99,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ]
            ],
            'Maintain' => [
                [
                    'name' => 'Whole Grain Wrap with Turkey and Spinach',
                    'category' => 'Maintain',
                    'description' => 'Whole grain wrap filled with sliced turkey, fresh spinach, and a light spread.',
                    'price' => 8.99,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Lentil Soup with Whole Wheat Bread',
                    'category' => 'Maintain',
                    'description' => 'Hearty lentil soup served with a slice of warm whole wheat bread.',
                    'price' => 7.49,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Baked Cod with Asparagus',
                    'category' => 'Maintain',
                    'description' => 'Oven-baked cod served with roasted asparagus and a lemon butter sauce.',
                    'price' => 11.49,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ]
            ],
            'Protein shakes' => [
                [
                    'name' => 'Vanilla Whey Protein Shake with Almond Milk',
                    'category' => 'Protein shakes',
                    'description' => 'Creamy vanilla protein shake blended with almond milk and a hint of honey.',
                    'price' => 5.99,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Chocolate Peanut Butter Protein Smoothie',
                    'category' => 'Protein shakes',
                    'description' => 'Rich chocolate smoothie with natural peanut butter and a banana.',
                    'price' => 6.49,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Berry Blast Protein Shake with Spinach',
                    'category' => 'Protein shakes',
                    'description' => 'A nutrient-packed shake made with mixed berries and fresh spinach.',
                    'price' => 6.99,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ]
            ],
            'Snacks' => [
                [
                    'name' => 'Greek Yogurt with Honey and Nuts',
                    'category' => 'Snacks',
                    'description' => 'Creamy Greek yogurt drizzled with honey and topped with mixed nuts.',
                    'price' => 4.99,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Rice Cakes with Avocado Spread',
                    'category' => 'Snacks',
                    'description' => 'Crispy rice cakes topped with fresh avocado and a sprinkle of sea salt.',
                    'price' => 3.99,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Carrot Sticks with Hummus',
                    'category' => 'Snacks',
                    'description' => 'Fresh carrot sticks served with a side of creamy hummus for dipping.',
                    'price' => 2.99,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ]
            ],
            'Beverages' => [
                [
                    'name' => 'Green Smoothie with Kale and Pineapple',
                    'category' => 'Beverages',
                    'description' => 'Refreshing green smoothie made with kale, pineapple, and coconut water.',
                    'price' => 5.49,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Infused Water with Lemon and Mint',
                    'category' => 'Beverages',
                    'description' => 'Cool and refreshing water infused with fresh lemon slices and mint leaves.',
                    'price' => 2.99,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Unsweetened Almond Milk',
                    'category' => 'Beverages',
                    'description' => 'Smooth and creamy unsweetened almond milk, perfect for smoothies or on its own.',
                    'price' => 3.49,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ]
            ],
            'Desserts' => [
                [
                    'name' => 'Chia Seed Pudding with Coconut Milk',
                    'category' => 'Desserts',
                    'description' => 'Creamy chia seed pudding made with coconut milk, served with fresh berries.',
                    'price' => 4.49,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Dark Chocolate Avocado Mousse',
                    'category' => 'Desserts',
                    'description' => 'Rich and creamy mousse made with ripe avocados and dark chocolate.',
                    'price' => 5.99,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ],
                [
                    'name' => 'Banana Oat Cookies',
                    'category' => 'Desserts',
                    'description' => 'Delicious cookies made with ripe bananas and oats, naturally sweet and healthy.',
                    'price' => 3.99,
                    'image' => 'https://cdn.prod.website-files.com/650da880c415cb1e80784a45/6522e7e4d7cd843a5d39e403_quinoa-veggie-salad-02.jpeg'
                ]
            ]
        ];


        foreach ($products as $category => $items) {
            foreach ($items as $item) {
                // Find category
                $categoryModel = Category::where('title', $category)->first();
                if ($categoryModel) {
                    // Generate unique slug
                    $baseSlug = Str::slug($item['name']);
                    $slug = $baseSlug;
                    $count = 1;

                    while (Product::where('slug', $slug)->exists()) {
                        $slug = $baseSlug . '-' . $count;
                        $count++;
                    }
                }

                $product_object = \App\Models\Product::create([
                    'name' => $item['name'],
                    'slug' => $slug,
                    'description' => $item['description'],
                    'price' => $item['price'],
                    'category_id' => \App\Models\Category::where('title', $category)->first()->id,
                    'sort_order' => 0,
                    'status' => true
                ]);

                $product_object->addMediaFromUrl($item['image'])->toMediaCollection('featured');
            }
        }

    }
}
