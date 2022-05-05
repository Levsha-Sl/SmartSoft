<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('title', 'asc')->paginate(3);

        return view('category.index', compact('categories'));
    }

    public function show($slag)
    {
        $category = Category::where('slug', $slag)->firstOrFail();
        $products = $category->products()->with('category')->orderBy('title', 'asc')->paginate(1);

        return view('category.show', compact('category', 'products'));
    }
}
