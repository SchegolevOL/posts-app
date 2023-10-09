<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];
    public function getSlugOptions() : SlugOptions//composer require spatie/laravel-sluggable
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
