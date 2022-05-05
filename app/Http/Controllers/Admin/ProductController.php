<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduct;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Tag;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category', 'tags')->paginate(20);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.products.create', compact('categories', 'tags'));
    }

    public function store(StoreProduct $request)
    {
        $data = $request->all();

        $data['thumbnail'] = Product::uploadImage($request);

        $product = Product::create($data);
        $product->tags()->sync($request->tags);

        return redirect()->route('products.index')->with('success', 'Продукт добавлен');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view("admin.products.edit", compact('product', 'categories', 'tags'));
    }

    public function update(StoreProduct $request, $id)
    {
        $product = Product::find($id);
        $product->slug = null;
        $data = $request->all();

        if ($file = Product::uploadImage($request, $product->thumbnail)) {
            $data['thumbnail'] = $file;
        }

        $product->update($data);
        $product->tags()->sync($request->tags);

        return redirect()->route('products.index')->with('success', 'Изменения сохранены');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->tags()->sync([]);

        Storage::delete($product->thumbnail);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Продукт удален');
    }
}
