<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'level'
    ];

    protected $visible = [
        'name', 'email', 'admin'
    ];

    protected $appends = [
        'admin'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function address()
    {
        return $this->hasOne(Address::class, 'user', 'id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'author', 'id');
    }

    public function commentsOnMyPost()
    {
        return $this->hasManyThrough(Comment::class, Post::class, 'author', 'post', 'id', 'id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'item');
    }

    public function scopeStudents($query)
    {
        return $this->where('level', '<=', 5);
    }

    public function scopeAdmins($query)
    {
        return $this->where('level', '>', 5);
    }

    public function getAdminAttribute()
    {
        return ($this->attributes['level'] > 5 ? true : false);
    }
}
