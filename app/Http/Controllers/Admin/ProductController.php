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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::paginate(2);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.products.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreProduct $request)
    {
        $data = $request->all();

        $data['thumbnail'] = Product::uploadImage($request);

        $product = Product::create($data);
        $product->tags()->sync($request->tags);

        return redirect()->route('products.index')->with('success', 'Продукт добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) // нам не нужен
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view("admin.products.edit", compact('product', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->tags()->sync([]);

        Storage::delete($product->thumbnail);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Продукт удален');
    }
}