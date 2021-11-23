<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\User;
use App\Models\CategoryPet;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);

        return [
            'name' => $name,
            'body' => $this->faker->text(300),
            'extract' => $this->faker->text(30),
            'edad' => $this->faker->text(30),
            'location' => $this->faker->text(30),
            'status' => $this->faker->randomElement([Pet::BORRADOR, Pet::PUBLICADO]),
            'slug' => Str::slug($name),
            'category_pet_id' => CategoryPet::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}
