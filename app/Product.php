<?php

namespace App;

use App\Http\Requests\StoreProduct;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'description', 'url', 'category_id', 'thumbnail'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function uploadImage(StoreProduct $request, string $image = null)
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
            $path = $request->file('thumbnail')->store("images/product/{$folder}");
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
        return asset('no-image.jpg');
    }
}
