<?php

namespace App\Models;

class Tag extends BaseModel
{
    protected $fillable = ['name', 'slug', 'description', 'category_id', 'user_id', 'is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function novels()
    {
        return $this->belongsToMany(Novel::class);
    }
}
