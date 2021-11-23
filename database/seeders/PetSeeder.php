<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\Image;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pet::factory(10)->create()->each(function(Pet $pet){
            Image::factory(1)->create([
                'imageable_type' => Pet::class,
                'imageable_id' => $pet->id,
            ]);
        });
    }
}
