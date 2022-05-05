<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\StoreCategory;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(20);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(StoreCategory $request)
    {
        $data = $request->all();

        $data['thumbnail'] = Category::uploadImage($request);

        Category::create($data);

        return redirect()->route('categories.index')->with('success', 'Категория добавлена');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view("admin.categories.edit", compact('category'));
    }

    public function update(StoreCategory $request, $id)
    {
        $category = Category::find($id);
        $category->slug = null;
        $data = $request->all();

        if ($file = Category::uploadImage($request, $category->thumbnail)) {
            $data['thumbnail'] = $file;
        }

        $category->update($data);

        return redirect()->route('categories.index')->with('success', 'Изменения сохранены');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->products->count()) {
            return redirect()->route('categories.index')->with('error', "Ошибка! У категории есть записи {$category->products->count()}.шт");
        }

        Category::destroy($id);

        return redirect()->route('categories.index')->with('success', 'Категория удалена');
    }
}
