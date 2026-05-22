<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Product extends Model
{
    public function images()
    {
        return $this->hasMany(
            Image::class
        );
    }
}