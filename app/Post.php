<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable =[
        'title',
        'content',
        'categories_id',
        'published_at',
        'slug',
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public static function getSlug ($title) {
        $slug = Str::slug($title, '-');
        $base_slug = $slug;
        $slug_present = Post::where('slug', $slug)->first();
        $counter = 1;

        while ($slug_present) {
            # code...\
            $slug = $base_slug . '-' . $counter;
            $counter++;
            $slug_present = Post::where('slug',$slug)->first();

        };

        return $slug;
    }
}
