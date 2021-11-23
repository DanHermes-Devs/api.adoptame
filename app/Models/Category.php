<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Relacion con post 1:n
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
