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

    public function comments()
    {
        return $this->morphMany(Comment::class, 'item');
    }

    public function getCreatedAttribute()
    {
        return date('d/m/Y H:i', strtotime($this->created_at));
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
