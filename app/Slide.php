<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Slide extends Model
{
    protected $fillable = ['title', 'description', 'url', 'thumbnail', 'active'];

    public static function uploadImage(Request $request, string $image = null)
    {
        if ($request->hasFile('thumbnail')) {
            if ($image) {
                Storage::delete($image);
            }

            $folder = date('Y-m-d');

            $path = $request->file('thumbnail')->store("images/slides/{$folder}");
            return $path;
        }
        return null;
    }

    public function getImage()
    {
        if ($this->thumbnail) {
            return asset("uploads/{$this->thumbnail}");
        }
        return asset('assets/img/no-image.jpg');
    }
}
