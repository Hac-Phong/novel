<?php

namespace App\Models;



class Slider extends BaseModel
{
    protected $fillable = ['name', 'slug', 'description', 'slider', 'user_id', 'is_published'];

    protected function casts(): array
    {
        return [
            'slider' => 'array',
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
