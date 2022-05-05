<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::with('category')->orderBy('id', 'desc')->paginate(10);

        return view('product.index', compact('products'));
    }

    public function show($slag)
    {
        $product = Product::where('slug', $slag)->firstOrFail();
/*
        $topProducts = Product::find('id_category', $product->id_category);
        $topProducts = Product::with('category')->orderBy('id', 'desc')->paginate(10);
        */

        $product->views += 1;
        $product->update();

        return view('product.show', compact('product'));
    }
}





