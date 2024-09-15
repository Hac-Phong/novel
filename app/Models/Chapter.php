<?php

namespace App\Models;

class Chapter extends BaseModel
{

    protected $fillable = [
        'name',
        'slug',
        'chapter_number',
        'content',
        'is_published',
        'published_at',
        'word_count',
        'chapter_price',
        'is_password',
        'password',
        'sort',
        'novel_id',
    ];

    public function novel()
    {
        return $this->belongsTo(Novel::class);
    }
}
