<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTag;
use App\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::paginate(20);
        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(StoreTag $request)
    {
        Tag::create($request->all());
        return redirect()->route('tags.index')->with('success', 'Тег добавлен');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view("admin.tags.edit", compact('tag'));
    }

    public function update(StoreTag $request, $id)
    {
        $category = Tag::find($id);
        $category->slug = null;
        $category->update($request->all());

        return redirect()->route('tags.index')->with('success', 'Изменения сохранены');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        if ($tag->products->count()) {
            return redirect()->route('tags.index')->with('error', "Ошибка! У тега есть записи {$tag->products->count()}.шт");
        }

        Tag::destroy($id);

        return redirect()->route('tags.index')->with('success', 'Тег удален');
    }
}
