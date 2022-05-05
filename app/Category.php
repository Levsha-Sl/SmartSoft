<?php

namespace App;

use App\Http\Requests\StoreCategory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    //https://github.com/cviebrock/eloquent-sluggable
    use Sluggable;

    protected $fillable = ['title', 'description', 'thumbnail'];

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

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function uploadImage(StoreCategory $request, string $image = null)
    {

        if ($request->hasFile('thumbnail')) {
            if ($image) {
                Storage::delete($image);
            }

            $folder = date('Y-m-d');
            $path = $request->file('thumbnail')->store("images/categories/{$folder}");
            return $path;
        }
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
