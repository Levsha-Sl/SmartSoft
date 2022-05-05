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
                // https: //laravel.com/docs/7.x/filesystem#deleting-files
                Storage::delete($image);
            }

            $folder = date('Y-m-d');

            /**
             * vendor\laravel\framework\src\Illuminate\Http\UploadedFile.php
             *
             * public function store($path, $options = [])
             *
             * Store the uploaded file on a filesystem disk.
             * The store method accepts the path where the file should be stored relative to the filesystem's configured root directory.
             * This path should not contain a file name, since a unique ID will automatically be generated to serve as the file name
             *
             * @param string $path
             * @param array|string $options
             * @return string|false
             */
            $path = $request->file('thumbnail')->store("images/slides/{$folder}");
            return $path;
        }
        // https: //laravel.com/docs/7.x/filesystem#deleting-files
        // Storage::delete($image);
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
