<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    // Relacion inversa con users 1:n inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacion inversa con category 1:n inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relacion muchos a muchos con tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // Relacion 1:n polimorfica
    public function images()
    {
        return $this->morphToMany(Image::class, 'imageable');
    }
}
