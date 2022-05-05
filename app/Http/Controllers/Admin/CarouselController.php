<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slide;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        $slides = Slide::paginate(10);
        return view('admin.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slides.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:43',
            'description' => 'max:106',
            'thumbnail' => 'required|image',
        ]);

        $data = $request->all();

        if ($request->has('active')) {
            $data['active'] = 1;
        } else {
            $data['active'] = 0;
        }

        $data['thumbnail'] = Slide::uploadImage($request);

        Slide::create($data);

        return redirect()->route('slides.index')->with('success', 'Слайд добавлен');
    }

    public function edit($id)
    {
        $slide = Slide::find($id);
        return view("admin.slides.edit", compact('slide'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:43',
            'description' => 'max:106',
            'thumbnail' => 'nullable|image',
        ]);

        $slide = Slide::find($id);
        $data = $request->all();

        if ($request->has('active')) {
            $data['active'] = 1;
        } else {
            $data['active'] = 0;
        }

        if ($file = Slide::uploadImage($request, $slide->thumbnail)) {
            $data['thumbnail'] = $file;
        }

        $slide->update($data);

        return redirect()->route('slides.index')->with('success', 'Изменения сохранены');
    }

    public function destroy($id)
    {
        Slide::destroy($id);

        return redirect()->route('slides.index')->with('success', 'Слайд удален');
    }
}
