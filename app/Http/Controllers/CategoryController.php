<?php

namespace App\Http\Controllers;

use App\Category;
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

        return view('category.show', compact('category'));
    }
}
