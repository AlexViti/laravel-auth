<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'slug'];

    static public function generateSlug(string $title) :string {
        $slug = Str::of($title)->slug('-');
        $i = 1;
        $baseSlug = $slug;
        while (self::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $i++;
        }
        return $slug;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
