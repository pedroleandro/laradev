<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'author', 'slug'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category', 'post', 'category');
    }
}
