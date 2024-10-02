<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $categories = Category::where('status', true)
            ->whereNull('parent_id')
            ->with('children')
            ->get();

        $products = Product::where('status', true)
            ->with('category')
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('menu', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
