<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Comment;

class Product extends Model
{
    public function images()
    {
        return $this->hasMany(
            Image::class
        );
    }

    public function comments()
    {
        return $this->hasMany(
            Comment::class
        );
    }
}