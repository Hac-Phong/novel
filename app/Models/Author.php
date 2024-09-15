<?php

namespace App\Models;

class Author extends BaseModel
{

    protected $fillable = ['name', 'slug', 'bio', 'user_id', 'is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function novels()
    {
        return $this->hasMany(Novel::class);
    }
}
