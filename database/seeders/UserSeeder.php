<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dan Hermes Reyes Osnaya',
            'email' => 'danhermes2019@outlook.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(10)->create();
    }
}
