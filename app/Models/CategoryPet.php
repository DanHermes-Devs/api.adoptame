<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPet extends Model
{
    use HasFactory;

    // Relacion con pet 1:n
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
