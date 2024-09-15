<?php

namespace App\Models;

class Post extends BaseModel
{
    protected $fillable = ['name', 'slug', 'content', 'category', 'user_id', 'is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
