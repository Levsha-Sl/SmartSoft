<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\StoreCategory;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::paginate(2);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCategory $request)
    {
        $data = $request->all();

        $data['thumbnail'] = Category::uploadImage($request);

        Category::create($data);

        return redirect()->route('categories.index')->with('success', 'Категория добавлена');
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
        $category = Category::find($id);
        return view("admin.categories.edit", compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
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
