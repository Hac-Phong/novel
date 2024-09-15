<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

abstract class BaseModel extends Model
{
    use HasFactory;

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => Str::title($value),
        );
    }

    protected function slug(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => Str::slug($value),
        );
    }
}
