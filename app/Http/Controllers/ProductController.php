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
        return view('product.show');
    }
}





