<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\Tag;
use App\Models\Category;
use App\Models\CategoryPet;
use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

        $this->call(UserSeeder::class);

        Category::factory(4)->create();
        Tag::factory(8)->create();
        CategoryPet::factory(2)->create();
        Image::factory(2)->create();

        $this->call(PostSeeder::class);
        $this->call(PetSeeder::class);
    }
}
