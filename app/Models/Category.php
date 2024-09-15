<?php

namespace App\Models;

class Category extends BaseModel
{
    protected $fillable = ['name', 'slug', 'user_id', 'is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
