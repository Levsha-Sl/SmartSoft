<?php

namespace App;

use App\Http\Requests\StoreProduct;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    //https://github.com/cviebrock/eloquent-sluggable
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
                Storage::delete($image);
            }

            $folder = date('Y-m-d');

            $path = $request->file('thumbnail')->store("images/products/{$folder}");
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

    public function getProductDate()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d F, Y');
    }

}
